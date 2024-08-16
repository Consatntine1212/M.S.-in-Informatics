import pandas as pd
import numpy as np
from scipy.sparse import lil_matrix, coo_matrix
from scipy.spatial.distance import pdist, squareform
from scipy.cluster.hierarchy import fcluster, linkage, dendrogram
from sklearn.cluster import KMeans, MiniBatchKMeans
from sklearn.decomposition import PCA, TruncatedSVD
from collections import Counter
from sklearn.metrics.pairwise import cosine_similarity
from tensorflow import keras
from keras import layers
import matplotlib.pyplot as plt

# Load the npy file
dataset = np.load('newdataset.npy', allow_pickle=True)

# Load the data using numpy.genfromtxt()
df = pd.DataFrame(np.genfromtxt(dataset, delimiter=',', dtype='str'),
                  columns=["userID", "movieID", "rating", "review_date"])

# Define the minimum and maximum number of votes
Rmin = 3
Rmax = 10

# Group the data by "userID" and count the number of occurrences
user_vote_counts = df.groupby("userID").size()

# Filter the "userID" that satisfy the condition Rmin <= count <= Rmax
valid_users = user_vote_counts[(user_vote_counts >= Rmin) & (user_vote_counts <= Rmax)].index

# Filter the DataFrame to include only the valid users
filtered_df = df[df["userID"].isin(valid_users)]

# Group the data by "userID" and count the number of occurrences
user_vote_counts = df.groupby("userID").size()

# Use value_counts() to get the count of users for each vote count
user_count_by_vote = user_vote_counts.value_counts()


# Convert "review_date" column to datetime for calculating temporal range
df['review_date'] = pd.to_datetime(df['review_date'])

# Calculate the temporal range (in days) for each user
user_temporal_range = (df.groupby("userID")['review_date'].max() - df.groupby("userID")['review_date'].min()).dt.days

# Create dictionaries to map "userID" and "movieID" to integer indices
user_id_map = {user_id: i for i, user_id in enumerate(df["userID"].unique())}
movie_id_map = {movie_id: i for i, movie_id in enumerate(df["movieID"].unique())}

algorithm = ""

while True:
    # Display menu options
    print("Select an option:")
    print("1. Print number of entries, unique users, and unique movies")
    print("2. Print filtered DataFrame for valid users")
    print("3. Print user count by vote count")
    print("4. Plot histogram of number of votes per user")
    print("5. Plot histogram of temporal range of reviews per user")
    print("6. Create an alternative representation of the dataset as preference vectors")
    print("7. Cluster the limited set of users into L clusters using euclidian")
    print("8. Cluster the limited set of users into L clusters cosine")
    print("9. Visualize the clusters")
    print("10. Cluster the limited set of users into L clusters ")
    print("11.create a collaborative filtering recommendation system using a neural network")
    print("0. Exit")
    # Get user input
    choice = input("Enter your choice (1-11): ")

    # Execute corresponding action based on user input
    if choice == '1':
        print("Number of entries: ", len(df))
        print("Number of unique users: ", len(df["userID"].unique()))
        print("Number of unique movies: ", len(df["movieID"].unique()))
    elif choice == '2':
        print(filtered_df)
    elif choice == '3':
        print(user_count_by_vote)
    elif choice == '4':
        plt.figure(figsize=(8, 6))
        plt.hist(user_vote_counts, bins=20, color='skyblue')
        plt.xlabel("Number of Votes")
        plt.ylabel("Frequency")
        plt.title("Histogram of Number of Votes per User")
        plt.show()
    elif choice == '5':
        plt.figure(figsize=(8, 6))
        plt.hist(user_temporal_range, bins=20, color='lightgreen')
        plt.xlabel("Temporal Range (days)")
        plt.ylabel("Frequency")
        plt.title("Histogram of Temporal Range of Reviews per User")
        plt.show()
    elif choice == '6':
        # Create an alternative representation of the dataset as preference vectors
        num_users = len(user_id_map)
        num_movies = len(movie_id_map)

        # Create a sparse matrix to represent the preference vectors
        preference_matrix = lil_matrix((num_users, num_movies), dtype=np.uint8)

        # Group the filtered DataFrame by user ID
        grouped_df = filtered_df.groupby("userID")

        # Loop through each group and populate the preference matrix
        for user_id, group in grouped_df:
            user_idx = user_id_map[user_id]
            for _, row in group.iterrows():
                movie_id = row["movieID"]
                rating = row["rating"]
                movie_idx = movie_id_map[movie_id]
                preference_matrix[user_idx, movie_idx] = rating
        print(preference_matrix)
    elif choice == '7':
        algorithm = "eucl"
        # Perform k-means clustering on the preference matrix
        num_clusters = 10  # choose the number of clusters
        kmeans = KMeans(n_clusters=num_clusters)
        cluster_labels = kmeans.fit_predict(preference_matrix)

        cluster_counts = Counter(cluster_labels)
        for label, count in cluster_counts.items():
            print(f"Cluster {label} has {count} members.")
        print(algorithm)


    elif choice == '8':
        algorithm = "cosin"
        # Create the user-item matrix
        n_users = len(user_id_map)
        n_items = len(movie_id_map)
        user_indices = np.array([user_id_map[user_id] for user_id in filtered_df['userID']])
        item_indices = np.array([movie_id_map[movie_id] for movie_id in filtered_df['movieID']])
        ratings = np.array(filtered_df['rating'], dtype=np.float32)
        user_item_matrix = coo_matrix((ratings, (user_indices, item_indices)), shape=(n_users, n_items)).tocsr()

        # Compute the cosine similarity matrix
        cosine_sim_matrix = cosine_similarity(user_item_matrix, dense_output=False)

        # Use MiniBatchKMeans to cluster the users based on their ratings
        n_clusters = 5  # Set the number of clusters to 5
        kmeans = MiniBatchKMeans(n_clusters=n_clusters, random_state=42)
        user_cluster_labels = kmeans.fit_predict(cosine_sim_matrix)

        # Group the users into clusters
        user_clusters = [set() for _ in range(n_clusters)]
        for user_idx, cluster_label in enumerate(user_cluster_labels):
            user_clusters[cluster_label].add(user_idx)

        # Print the number of users in each cluster
        for i in range(n_clusters):
            print(f"Cluster {i + 1}: {len(user_clusters[i])} users")
    elif choice == '9':
        print(algorithm)
        if algorithm == "eucl":
            # Apply TruncatedSVD to reduce the dimensionality of the preference matrix
            svd = TruncatedSVD(n_components=2)
            svd_matrix = svd.fit_transform(preference_matrix)

            # Plot the clusters using the TruncatedSVD-reduced matrix
            plt.scatter(svd_matrix[:, 0], svd_matrix[:, 1], c=cluster_labels)
            plt.title('K-means Clustering of Users')
            plt.xlabel('TruncatedSVD Dimension 1')
            plt.ylabel('TruncatedSVD Dimension 2')
            plt.show()
        elif algorithm == "cosin":
            # Visualize the clusters
            pca = PCA(n_components=2)
            svd = TruncatedSVD(n_components=2)
            cosine_sim_matrix_reduced = svd.fit_transform(cosine_sim_matrix)

            plt.figure(figsize=(10, 10))
            for i in range(n_clusters):
                cluster_data = cosine_sim_matrix_reduced[list(user_clusters[i]), :]
                plt.scatter(cluster_data[:, 0], cluster_data[:, 1], label=f"Cluster {i + 1}")
            plt.legend()
            plt.show()
        else:
            print("You have not created the clusters yet")
    #/////-----
    elif choice == '10':
        # Perform PCA to reduce the dimensionality of the preference matrix
        pca = PCA(n_components=50)
        preference_matrix_pca = pca.fit_transform(preference_matrix.toarray())
        # Compute the pairwise Jaccard distance between the rows of the reduced preference matrix
        jaccard_dist = pdist(preference_matrix_pca, metric='jaccard')
        # Convert the pairwise distance vector to a distance matrix
        jaccard_dist_matrix = squareform(jaccard_dist)
        print(jaccard_dist_matrix)

        # Compute the hierarchical clustering of the Jaccard distance matrix
        linkage_matrix = linkage(jaccard_dist_matrix, method='ward')

        # Plot the dendrogram of the hierarchical clustering
        #        plt.figure(figsize=(10, 5))
        #        dendrogram(linkage_matrix, truncate_mode='level', p=10)
        #        plt.xlabel('Users')
        #        plt.ylabel('Jaccard distance')
        #        plt.show()

        # Assign each user to a cluster based on the hierarchical clustering
        num_clusters = 3
        user_clusters = fcluster(linkage_matrix, num_clusters, criterion='maxclust')
    elif choice == '11':
        L = 5
        predictions = {}

        for a in range(L):
            # Get the indices of the rows in the preference matrix that correspond to the users in the cluster U_Ga
            cluster_users = np.where(user_clusters == a)[0]

            if len(cluster_users) == 0:
                continue  # skip this cluster if there are no users

            # Extract the subset of the preference matrix that corresponds to the users in the cluster
            cluster_preferences = preference_matrix[cluster_users, :]

            # Compute the pairwise cosine similarity between the rows of the subset of the preference matrix
            cosine_sim = cosine_similarity(cluster_preferences)

            # Identify the k closest neighbors for each user in the cluster based on their cosine similarities
            k = 5
            closest_neighbors = np.argsort(-cosine_sim, axis=1)[:, 1:k + 1]

            # Define the neural network architecture
            inputs = layers.Input(shape=(k,))
            x = layers.Dense(64, activation='relu')(inputs)
            x = layers.Dropout(0.2)(x)
            x = layers.Dense(32, activation='relu')(x)
            x = layers.Dropout(0.2)(x)
            outputs = layers.Dense(1, activation='linear')(x)

            model = keras.Model(inputs=inputs, outputs=outputs)

            # Compile the model
            # Compile the model
            model.compile(optimizer='adam', loss='mse')

            # Prepare the training data
            X_train = np.zeros((len(cluster_users), k))
            y_train = np.zeros((len(cluster_users), 1))

            for i, user in enumerate(cluster_users):
                X_train[i, :] = preference_matrix[closest_neighbors[i], :].toarray().flatten()[:k]
                y_train[i, 0] = preference_matrix[user, 0]

            # Train the neural network
            model.fit(X_train, y_train, epochs=10, batch_size=32)

            # Use the trained neural network to predict the ratings of each user in the cluster
            X_pred = np.zeros((len(cluster_users), k))

            for i, user in enumerate(cluster_users):
                X_pred[i, :] = preference_matrix[closest_neighbors[i], :].toarray().flatten()[:5]

            y_pred = model.predict(X_pred)

            # Store the predicted ratings in a dictionary
            predictions[a] = (cluster_users, y_pred)

    elif choice == '0':
        print("Exiting...")
        break
    else:
        print("Invalid input. Please try again.")
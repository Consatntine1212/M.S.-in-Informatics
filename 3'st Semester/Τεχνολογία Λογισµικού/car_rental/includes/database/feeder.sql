INSERT INTO users (
        username,
        email,
        password,
        fullname,
        phone,
        pic,
        country,
        birth_date,
        type
    )
VALUES (
        'user1',
        'user1@example.com',
        'password1',
        'User One',
        '123-456-7890',
        'pic1.jpg',
        'USA',
        '1990-01-01',
        'client'
    ),
    (
        'user2',
        'user2@example.com',
        'password2',
        'User Two',
        '123-456-7890',
        'pic2.jpg',
        'Canada',
        '1990-01-02',
        'owner'
    ),
    (
        'user3',
        'user3@example.com',
        'password3',
        'User Three',
        '123-456-7890',
        'pic3.jpg',
        'USA',
        '1990-01-03',
        'owner'
    ),
    (
        'user4',
        'user4@example.com',
        'password4',
        'User Four',
        '123-456-7890',
        'pic4.jpg',
        'Canada',
        '1990-01-04',
        'client'
    ),
    (
        'user5',
        'user5@example.com',
        'password5',
        'User Five',
        '123-456-7890',
        'pic5.jpg',
        'USA',
        '1990-01-05',
        'owner'
    ),
    (
        'user6',
        'user6@example.com',
        'password6',
        'User Six',
        '123-456-7890',
        'pic6.jpg',
        'Canada',
        '1990-01-06',
        'client'
    ),
    (
        'user7',
        'user7@example.com',
        'password7',
        'User Seven',
        '123-456-7890',
        'pic7.jpg',
        'USA',
        '1990-01-07',
        'owner'
    ),
    (
        'user8',
        'user8@example.com',
        'password8',
        'User Eight',
        '123-456-7890',
        'pic8.jpg',
        'Canada',
        '1990-01-08',
        'client'
    ),
    (
        'user9',
        'user9@example.com',
        'password9',
        'User Nine',
        '123-456-7890',
        'pic9.jpg',
        'USA',
        '1990-01-09',
        'owner'
    ),
    (
        'user10',
        'user10@example.com',
        'password10',
        'User Ten',
        '123-456-7890',
        'pic10.jpg',
        'Canada',
        '1990-01-10',
        'client'
    );


    INSERT INTO cars (owner_id, brand, model, cubic_meter, year, price, description, pic, availability, availability_date, availability_place)
VALUES
  (2, 'Toyota', 'Camry', 2.5, 2010, 10000, 'This is a great car', 'car1.jpg', true, '2023-05-10', 'Toronto'),
  (3, 'Honda', 'Accord', 2.4, 2015, 12000, 'This is another great car', 'car2.jpg', true, '2023-05-11', 'New York'),
  (5, 'Ford', 'Mustang', 5.0, 2018, 25000, 'This is a cool sports car', 'car3.jpg', true, '2023-05-12', 'Los Angeles'),
  (7, 'Chevrolet', 'Impala', 3.6, 2012, 8000, 'This is a reliable car', 'car4.jpg', true, '2023-05-13', 'Chicago')
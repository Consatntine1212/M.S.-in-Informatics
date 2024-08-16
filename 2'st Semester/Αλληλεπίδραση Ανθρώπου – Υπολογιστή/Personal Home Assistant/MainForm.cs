using System;
using System.Collections.Generic;
using System.ComponentModel;
using System.Data;
using System.Drawing;
using System.Linq;
using System.Text;
using System.Threading.Tasks;
using System.Windows.Forms;
using static System.Windows.Forms.VisualStyles.VisualStyleElement.TaskbarClock;
using System.Xml.Linq;
using static System.Windows.Forms.VisualStyles.VisualStyleElement.Window;
using System.Diagnostics;
using System.Speech.Recognition;
using System.Speech.Synthesis;

namespace Personal_Home_Assistant
{

    public partial class MainForm : Form
    {
        SpeechRecognitionEngine speechRecognitionEngine = null;
        SpeechSynthesizer Jarvis = new SpeechSynthesizer();
        public MainForm()
        {
            InitializeComponent();
        }

        List<string> Shoess = new List<string>();
        int counter = 0;
        
        private void label5_Click(object sender, EventArgs e)
        {
            
        }

        private void pictureBox10_Click(object sender, EventArgs e)
        {
            if(label5.BackColor == Color.Red)
            {
                label5.BackColor = Color.Green;
                Jarvis.Speak("Your devise is on.");
            }
            else
            {
                label5.BackColor = Color.Red;
                Jarvis.Speak("Your devise is off.");
            }
        }

        private void pictureBox11_Click(object sender, EventArgs e)
        {
            if (label6.BackColor == Color.Red)
            {
                label6.BackColor = Color.Green;
                Jarvis.Speak("Your devise is on.");
            }
            else
            {
                label6.BackColor = Color.Red;
                Jarvis.Speak("Your devise is off.");
            }
        }

        private void pictureBox12_Click(object sender, EventArgs e)
        {
            if (label7.BackColor == Color.Red)
            {
                label7.BackColor = Color.Green;
                Jarvis.Speak("Your devise is on.");
            }
            else
            {
                label7.BackColor = Color.Red;
                Jarvis.Speak("Your devise is off.");
            }
        }

        private void pictureBox13_Click(object sender, EventArgs e)
        {
            if (label8.BackColor == Color.Red)
            {
                label8.BackColor = Color.Green;
                Jarvis.Speak("Your devise is on.");
            }
            else
            {
                label8.BackColor = Color.Red;
                Jarvis.Speak("Your devise is off.");
            }
        }

        private void pictureBox14_Click(object sender, EventArgs e)
        {
            if (label9.BackColor == Color.Red)
            {
                label9.BackColor = Color.Green;
                Jarvis.Speak("Your devise is on.");
            }
            else
            {
                label9.BackColor = Color.Red;
                Jarvis.Speak("Your devise is off.");
            }
        }

        private void pictureBox15_Click(object sender, EventArgs e)
        {
            if (label10.BackColor == Color.Yellow)
            {
                label10.BackColor = Color.Black;
                Jarvis.Speak("Τhe lights are off.");
            }
            else
            {
                label10.BackColor = Color.Yellow;
                Jarvis.Speak("Τhe lights are on.");
            }
        }

        private void pictureBox16_Click(object sender, EventArgs e)
        {
            if (label11.BackColor == Color.Yellow)
            {
                label11.BackColor = Color.Black;
                Jarvis.Speak("Τhe lights are off.");
            }
            else
            {
                label11.BackColor = Color.Yellow;
                Jarvis.Speak("Τhe lights are on.");
            }
        }

        private void pictureBox17_Click(object sender, EventArgs e)
        {
            if (label12.BackColor == Color.Yellow)
            {
                label12.BackColor = Color.Black;
                Jarvis.Speak("Τhe lights are off.");
            }
            else
            {
                label12.BackColor = Color.Yellow;
                Jarvis.Speak("Τhe lights are on.");
            }
        }

        private void pictureBox18_Click(object sender, EventArgs e)
        {
            if (label13.BackColor == Color.Yellow)
            {
                label13.BackColor = Color.Black;
                Jarvis.Speak("Τhe lights are off.");
            }
            else
            {
                label13.BackColor = Color.Yellow;
                Jarvis.Speak("Τhe lights are on.");
            }
        }

        private void pictureBox19_Click(object sender, EventArgs e)
        {
            if (label14.BackColor == Color.Yellow)
            {
                label14.BackColor = Color.Black;
                Jarvis.Speak("Τhe lights are off.");
            }
            else
            {
                label14.BackColor = Color.Yellow;
                Jarvis.Speak("Τhe lights are on.");
            }
        }

        private void pictureBox20_Click(object sender, EventArgs e)
        {
            if (label15.BackColor == Color.Yellow)
            {
                label15.BackColor = Color.Black;
                Jarvis.Speak("Τhe lights are off.");
            }
            else
            {
                label15.BackColor = Color.Yellow;
                Jarvis.Speak("Τhe lights are on.");
            }
        }

        private void pictureBox22_Click(object sender, EventArgs e)
        {
            label16.Text = "100%";
            label16.ForeColor = Color.Yellow;
            Jarvis.Speak("Ιn your pet the food was filled.");

        }

        private void pictureBox23_Click(object sender, EventArgs e)
        {
            label17.Text = "100%";
            label17.ForeColor = Color.Yellow;
            Jarvis.Speak("In your pet the water was filled.");
        }

        private void pictureBox21_Click(object sender, EventArgs e)
        { Random rnd = new Random();
            int room = rnd.Next(1,7);
            int water = rnd.Next(1, 100);
            int food = rnd.Next(1, 100);
            int mood = rnd.Next(1,6);

            label39.Text = "Room" + room;

            if (mood == 1)
            {
                label40.Text = "Bad";
                //People tend to associate red with negative, danger-bearing emotions.This could be because it is the color of fire, blood.
                label40.ForeColor = Color.IndianRed;
            }
            if (mood == 2)
            {
                label40.Text = "Good";
                //Green evokes a feeling of abundance and is associated with refreshment and peace, rest and security
                label40.ForeColor = Color.Green;
            }
            if (mood == 3)
            {
                label40.Text = "Sleepy";
                //light purples are associated with light-hearted, romantic energies, while darker shades can represent sadness and frustration.
                label40.ForeColor = Color.MediumPurple;
                               
            }
            if (mood == 4)
            {
                label40.Text = "Playful";
                //Blue calls to mind feelings of calmness or serenity.
                label40.ForeColor = Color.MediumAquamarine;
            }
            if (mood == 5)
            {
                label40.Text = "Excellent";
                //Yellow is usually the color of happy, joyful emotions.
                label40.ForeColor = Color.Yellow;
            }


            
            label17.Text = water + "%";
            
            if (water < 20)
            {
                label17.ForeColor = Color.IndianRed;
            }
            if (water >= 20 && water < 100)
            {
                label17.ForeColor = Color.Green;
            }
            if (water == 100)
            {
                label17.ForeColor = Color.Yellow;
            }
            

            label16.Text = food + "%";

            if (food < 20)
            {
                label16.ForeColor = Color.IndianRed;
            }
            if (food >= 20 && food<100 )
            {
                label16.ForeColor = Color.Green;
            }
            if (food == 100)
            {
                label16.ForeColor = Color.Yellow;
            }
            
            MessageBox.Show(" Your Animal checked is in "+ label40.Text  + " mood and located in room " + room
                + " has  " + food + "% food and " + water + "%  water ");
            Jarvis.Speak("  Your Animal checked is in " + label40.Text + " mood and located in room " + room
                + " has  " + food + "% food  and " + water + "%  water ");


        }
        
        private void button2_Click(object sender, EventArgs e)
        {
           
            
            ////////////////////////////////////////////////////////////////SOS//////////////////////////////////////////
            //if (comboBox1.SelectedItem.ToString() == null)
            /*{
                MessageBox.Show(" Click on combobox");
            }*/
            if (comboBox1.SelectedItem.ToString() == label22.Text)
            {
                label22.Text = comboBox2.SelectedItem.ToString() + " at " + comboBox1.SelectedItem.ToString();
            }
            if (comboBox1.SelectedItem.ToString() == label23.Text)
            {
                label23.Text =  comboBox2.SelectedItem.ToString() + " at " + comboBox1.SelectedItem.ToString();
            }
            if (comboBox1.SelectedItem.ToString() == label24.Text)
            {
                label24.Text =  comboBox2.SelectedItem.ToString() + " at " + comboBox1.SelectedItem.ToString();
            }
            if (comboBox1.SelectedItem.ToString() == label25.Text)
            {
                label25.Text =  comboBox2.SelectedItem.ToString() + " at " + comboBox1.SelectedItem.ToString();
            }
            if (comboBox1.SelectedItem.ToString() == label26.Text)
            {
                label26.Text =  comboBox2.SelectedItem.ToString() + " at " + comboBox1.SelectedItem.ToString();
            }
            if (comboBox1.SelectedItem.ToString() == label27.Text)
            {
                label27.Text = comboBox2.SelectedItem.ToString() + " at " + comboBox1.SelectedItem.ToString();
            }
            if (comboBox1.SelectedItem.ToString() == label28.Text)
            {
                label28.Text = comboBox2.SelectedItem.ToString() + " at " + comboBox1.SelectedItem.ToString();
            }
            if (comboBox1.SelectedItem.ToString() == label29.Text)
            {
                label29.Text = comboBox2.SelectedItem.ToString() + " at " + comboBox1.SelectedItem.ToString();
                counter = counter + 1;
            }
            if (comboBox1.SelectedItem.ToString() == label30.Text)
            {
                label30.Text = comboBox2.SelectedItem.ToString() + " at " + comboBox1.SelectedItem.ToString();
                counter = counter + 1;
            }
            if (comboBox1.SelectedItem.ToString() == label31.Text)
            {
                label31.Text = comboBox2.SelectedItem.ToString() + " at " + comboBox1.SelectedItem.ToString();
                counter = counter + 1;
            }
            if (comboBox1.SelectedItem.ToString() == label32.Text)
            {
                label32.Text = comboBox2.SelectedItem.ToString() + " at " + comboBox1.SelectedItem.ToString();
                counter = counter + 1;
            }
            if (comboBox1.SelectedItem.ToString() == label33.Text)
            {
                label33.Text = comboBox2.SelectedItem.ToString() + " at " + comboBox1.SelectedItem.ToString();
                counter = counter + 1;
            }
            if (comboBox1.SelectedItem.ToString() == label34.Text)
            {
                label34.Text = comboBox2.SelectedItem.ToString() + " at " + comboBox1.SelectedItem.ToString();
                counter = counter + 1;
            }
            if (comboBox1.SelectedItem.ToString() == label35.Text)
            {
                label35.Text = comboBox2.SelectedItem.ToString() + " at " + comboBox1.SelectedItem.ToString();
                counter = counter + 1;
            }
            if (comboBox1.SelectedItem.ToString() == label36.Text)
            {
                label36.Text = comboBox2.SelectedItem.ToString() + " at " + comboBox1.SelectedItem.ToString();
                
            }
            if (comboBox1.SelectedItem.ToString() == label37.Text)
            {
                label37.Text = comboBox2.SelectedItem.ToString() + " at " + comboBox1.SelectedItem.ToString();
            }
            if (comboBox1.SelectedItem.ToString() == label38.Text)
            {
                label38.Text = comboBox2.SelectedItem.ToString() + " at " + comboBox1.SelectedItem.ToString();
            }

            if(counter == 3)
            {
                DialogResult dialogResult = MessageBox.Show("Do you want your pet to be fed alone?", "Υou will be away from home for many hours", MessageBoxButtons.YesNo);
                if (dialogResult == DialogResult.Yes)
                {
                    MessageBox.Show("Automatic-feeder set it!");
                    Jarvis.Speak("Automatic-feeder set it!");
                    

                }
                else if (dialogResult == DialogResult.No)
                {
                    
                }
                
            }

            if(comboBox5.SelectedItem.ToString() == "Yes")
            {
                DialogResult dialogResult = MessageBox.Show("Do you want to buy a Coffee?", "Coffee Time", MessageBoxButtons.YesNo);
                if (dialogResult == DialogResult.Yes)
                {
                    Process.Start("https://www.google.com/search?q=" + " coffee at " + richTextBox2.Text);

                }
                else if (dialogResult == DialogResult.No)
                {
                    comboBox5.Text = "No";
                }
            }

            

            if (comboBox3.SelectedItem.ToString() == "Buy News Shoes")
            {
                DialogResult dialogResult = MessageBox.Show("Do you want to buy now new shoes?","Go for shoping", MessageBoxButtons.YesNo) ;
                if (dialogResult == DialogResult.Yes)
                {
                    System.Diagnostics.Process.Start("www.skroutz.gr/search?keyphrase=%CF%80%CE%B1%CF%80%CE%BF%CF%85%CF%84%CF%83%CE%B9%CE%B1&from=autocomplete");
                }
                else if (dialogResult == DialogResult.No)
                {
                    comboBox3.Text = "None";
                }
               
            }

            if (comboBox4.SelectedItem.ToString() == "Car")
            {
                DialogResult dialogResult = MessageBox.Show("Do you want to search for parking near by?", "Find Parking", MessageBoxButtons.YesNo);
                if (dialogResult == DialogResult.Yes)
                {
                    Process.Start("https://www.google.com/search?q=" + " Parking at " + richTextBox2.Text);
                }
                else if (dialogResult == DialogResult.No)
                {
                    comboBox4.Text = "Car";
                }
                DialogResult dialogResult1 = MessageBox.Show("Do you want to see the trafic?", "Traffic Map", MessageBoxButtons.YesNo);
                if (dialogResult1 == DialogResult.Yes)
                {
                    System.Diagnostics.Process.Start("https://www.google.com/maps/@37.9810075,23.7772392,12.5z/data=!5m1!1e1");
                }
                else if (dialogResult1 == DialogResult.No)
                {
                    comboBox4.Text = "Car";
                }

            }

            Events e1 = new Events(comboBox2.SelectedItem.ToString(), comboBox1.SelectedItem.ToString(), comboBox3.SelectedItem.ToString(),
                richTextBox2.Text, comboBox4.SelectedItem.ToString());
            
            string address = richTextBox2.Text;
            Shoess.Add(comboBox3.SelectedItem.ToString());

            label18.Hide();
            label19.Hide();
            label20.Hide();
            label21.Hide();
            label42.Hide();
            label43.Hide();
            label44.Hide();

            comboBox1.Hide();
            comboBox2.Hide();
            comboBox3.Hide();
            comboBox4.Hide();
            comboBox5.Hide();

            richTextBox2.Hide();
            richTextBox3.Hide();

            button5.Hide();
            button2.Hide();
                        
            MessageBox.Show("New Event Added");
            Jarvis.Speak("New Event Added");
            
        }

        private void MainForm_Load(object sender, EventArgs e)
        {
            Jarvis.Speak("HI i am Jarvis your personal assistant.");
            Jarvis.Speak("I'm here to help you, click on an image to continue.");
            label18.Hide();
            label19.Hide();
            label20.Hide();
            label21.Hide();
            label42.Hide();
            label43.Hide();

            comboBox1.Hide();
            comboBox2.Hide();
            comboBox3.Hide();
            comboBox4.Hide();
            comboBox5.Hide();

            richTextBox2.Hide();
            button2.Hide();
            label44.Hide();
            richTextBox3.Hide();
            button5.Hide();

        }

        private void button1_Click(object sender, EventArgs e)
        {   

            label18.Show();
            label19.Show();
            label20.Show();
            label21.Show();
            label42.Show();
            label43.Show();


            comboBox1.Show();
            comboBox2.Show();
            comboBox3.Show();
            comboBox4.Show();
            comboBox5.Show();

            richTextBox2.Show();
            button2.Show();

        }

        private void comboBox2_SelectedIndexChanged(object sender, EventArgs e)
        {
            if (comboBox2.SelectedItem.ToString() == "Add New Event")
            {
                label44.Show();
                richTextBox3.Show();
                button5.Show();
            }

        }

        private void button5_Click(object sender, EventArgs e)
        {
            comboBox2.Items.Add(richTextBox3.Text);
            comboBox2.Text = richTextBox3.Text;
            label44.Hide();
            richTextBox3.Hide();
            button5.Hide();
        }

        private void comboBox3_SelectedIndexChanged(object sender, EventArgs e)
        {
            
        }

        private void WeatherBtn_Click(object sender, EventArgs e)
        {
            System.Diagnostics.Process.Start("www.meteo.gr/");
        }

        private void pictureBox24_Click(object sender, EventArgs e)
        {
            var message = string.Join(Environment.NewLine, Shoess); //join in one row
            MessageBox.Show("According to your schedule you will need " +
                "the following shoes to have with you:/n" + message );
            Jarvis.Speak("According to your schedule you will need " +
                "the following shoes to have with you:/n" + message);
            

        }

        private void SearchWebBtn_Click(object sender, EventArgs e)
        {
            System.Diagnostics.Process.Start("https://www.google.com/");
        }

        private void EmailBtn_Click(object sender, EventArgs e)
        {
            System.Diagnostics.Process.Start("https://accounts.google.com/b/0/AddMailService");
        }

        private void NewsReaderBtn_Click(object sender, EventArgs e)
        {
            System.Diagnostics.Process.Start("https://www.ertnews.gr/");
        }

        private void EFoodBtn_Click(object sender, EventArgs e)
        {
            System.Diagnostics.Process.Start("https://www.e-food.gr/");
        }

        private void button4_Click(object sender, EventArgs e)
        {
            var message = string.Join(Environment.NewLine, Shoess); //join in one row
            MessageBox.Show("Υou will need the following shoes to have with you:\n" + message);
           
            Jarvis.Speak("You will need the following shoes to have with you:" + message);


        }

        private void label2_Click(object sender, EventArgs e)
        {
            Jarvis.Speak("By clicking on the images below you can open and close your devices.");
        }

        private void label3_Click(object sender, EventArgs e)
        {
            Jarvis.Speak("By clicking on the images below you can turn the lights on and off.");
        }

        private void label1_Click(object sender, EventArgs e)
        {
            Jarvis.Speak("In this column you can see your schedule, make notes and organize it.");
        }

        private void panel14_Paint(object sender, PaintEventArgs e)
        {
            //Jarvis.Speak("In this column you can see your schedule, make notes and organize your schedule.");
        }

        private void pictureBox28_Click(object sender, EventArgs e)
        {
            
            Jarvis.Speak("According to your schedule I can tell you which shoes you'll need ");
        }

        private void panel13_Paint(object sender, PaintEventArgs e)
        {
            Jarvis.Speak("In this column you can read your emails, the news of the day.");
            Jarvis.Speak("I can order your coffee or help you with your shoe selection.");
        }

        private void pictureBox1_Click(object sender, EventArgs e)
        {
            Jarvis.Speak("By clicking you can see your emails.");
        }

        private void pictureBox5_Click(object sender, EventArgs e)
        {
            Jarvis.Speak(" By clicking you can see the news. ");
        }

        private void pictureBox4_Click(object sender, EventArgs e)
        {
            Jarvis.Speak("By clicking you can see the weather. ");
        }

        private void pictureBox7_Click(object sender, EventArgs e)
        {
            Jarvis.Speak("By clicking you can search in google.");
        }

        private void pictureBox8_Click(object sender, EventArgs e)
        {
            Jarvis.Speak("By clicking you can delivey your food or coffee.");
        }

        private void pictureBox2_Click(object sender, EventArgs e)
        {
            Jarvis.Speak("This is your media player.");
        }

        private void pictureBox3_Click(object sender, EventArgs e)
        {
            Jarvis.Speak("By clicking I can read your  daily notes");
        }

        private void TextReaderBtn_Click(object sender, EventArgs e)
        {
            Jarvis.Speak(richTextBox1.Text);
        }

        private void pictureBox27_Click(object sender, EventArgs e)
        {
            Random rnd = new Random();
            int room = rnd.Next(1, 7);
            MessageBox.Show("Your Animal  located in room " + room);
            Jarvis.Speak("Your Animal  located in room " + room);
        }

        private void Title_lbl_Click(object sender, EventArgs e)
        {
            Jarvis.Speak("HI i am Jarvis your personal assistant.");
            Jarvis.Speak("I'm here to help you, click on an image to continue.");
        }

        private void WebReaderBtn_Click(object sender, EventArgs e)
        {
            System.Diagnostics.Process.Start("https://www.google.com/maps/@37.9810075,23.7772392,12.5z/data=!5m1!1e1");
        }

        private void pictureBox6_Click(object sender, EventArgs e)
        {
            Jarvis.Speak("By clicking you can see the traffic");
        }

        private void SettingsBtn_Click(object sender, EventArgs e)
        {

            DialogResult dialogResult3 = MessageBox.Show("Do you want to restart the App?", "Settings", MessageBoxButtons.YesNo);
            if (dialogResult3 == DialogResult.Yes)
            {
                Application.Restart();
            }
            else if (dialogResult3 == DialogResult.No)
            {
                return;
            }
            
        }

        private void MediaBtn_Click(object sender, EventArgs e)
        {
            System.Diagnostics.Process.Start("https://www.youtube.com/watch?v=jNo3zmhXE9Y&ab_channel=thedarkknightofsteel/");
        }
    }
    }

using System;
using System.Collections.Generic;
using System.ComponentModel;
using System.Data;
using System.Drawing;
using System.Linq;
using System.Text;
using System.Threading.Tasks;
using System.Windows.Forms;
using System.Media;



namespace c_sharp_hunt_game
{
    public partial class Form1 : Form
    {
        // Declerations
        int spead = 1;
        int x;
        int y;
        int z;
        int totaltime = 40;
        int intrevals = 10;
        int random1;
        int random2;
        int random3;
        int random4;
        int drift1;
        int drift2;
        int drift3;
        int drift4;
        int maxdrift = 1;
        string direcion1;
        string direcion2;
        string direcion3;
        string direcion4;
        bool bird1;
        bool bird2;
        bool bird3;
        bool bird4;
        bool gunactive;
        int gunwaittime;
        int score ;
        PictureBox backimage = new PictureBox();
        SoundPlayer player = new SoundPlayer("Audio\\Riflegunshot.wav");
        SoundPlayer reload = new SoundPlayer("Audio\\Loadingrifle.wav");
        int waitt;
        int bulletsleft;
        int def;
        string name;
        string tempst;
        int tempin;
        bool gameIsActive;
        Random r = new Random();
        int count = 0;
        bool printed = false;
        // Waits a random time then spowns a bird
        private void timer1_Tick_1(object sender, EventArgs e)
        {
            random1--;
            if (bird1 == false && random1 < 0)
            {
                bird1 = true;
                random1 = r.Next(intrevals);
                pictureBox1.Enabled = false;
                pictureBox1.Visible = false;
            }
            if (bird1 && random1 < 0)
            {
                SpawnBird1();
            }
        }

        private void timer2_Tick(object sender, EventArgs e)
        {
            random2--;
            if (bird2 == false && random2 < 0)
            {
                bird2 = true;
                random2 = r.Next(intrevals);
                pictureBox2.Enabled = false;
                pictureBox2.Visible = false;
            }
            if (bird2 && random2 < 0)
            {
                SpawnBird2();
            }
        }

        private void timer3_Tick(object sender, EventArgs e)
        {
            random3--;
            if (bird3 == false && random3 < 0)
            {
                bird3 = true;
                random3 = r.Next(intrevals);
                pictureBox3.Enabled = false;
                pictureBox3.Visible = false;
            }
            if (bird3 && random3 < 0)
            {
                SpawnBird3();
            }
        }

        private void timer4_Tick(object sender, EventArgs e)
        {
            random4--;
            if (bird4 == false && random4 < 0)
            {
                bird4 = true;
                random4 = r.Next(intrevals);
                pictureBox4.Enabled = false;
                pictureBox4.Visible = false;
            }
            if (bird4 && random4 < 0)
            {
                SpawnBird4();
            }
        }

        
        public Form1(string s, int d)
        {
            def = d;
            name = s;
            InitializeComponent();
            StartGame();
        }

        private void StartGame()
        {
            //this.BackgroundImage = Properties.Resources.bgwallpaper;
            //this.BackgroundImage.
            maxdrift = maxdrift * def;
            spead = spead * def;
            gameTimer.Enabled = true;
            gameTimer.Interval = 4;
            bird1 = true;
            bird2 = true;
            bird3 = true;
            bird4 = true;
            random1 = r.Next(intrevals) / 5;
            random2 = r.Next(intrevals / 3);
            random3 = r.Next(intrevals / 2);
            random4 = r.Next(intrevals);
            timer1.Enabled = true;
            timer2.Enabled = true;
            timer3.Enabled = true;
            timer4.Enabled = true;
            pictureBox1.Enabled = false;
            pictureBox2.Enabled = false;
            pictureBox3.Enabled = false;
            pictureBox4.Enabled = false;
            pictureBox1.Visible = false;
            pictureBox2.Visible = false;
            pictureBox3.Visible = false;
            pictureBox4.Visible = false;
            pictureBox5.Visible = false;
            gunactive = true;
            int gunwaittime = 1;
            waitt = gunwaittime;
            bulletsleft = 8;
            label2.Text = ("Bullets : " + bulletsleft);
            pictureBox1.BackColor = Color.Transparent;
            pictureBox2.BackColor = Color.Transparent;
            pictureBox3.BackColor = Color.Transparent;
            pictureBox4.BackColor = Color.Transparent;
            timer5.Enabled = true;
            totaltime = 40;
            richTextBox1.Visible = false;
            score = 0;
        }
        /*
        bird2.gif
        bird2-Rotated.gif
        bird3.gif
        bird3-Rotated.gif
        Stork-Bird.gif
        Stork-Bird-Rotated.gif
        */
        //Spawn Birds 1 2 3 4 in a random potition on the left or right edge and changes the image acordingly
        private void SpawnBird1()
        {
            pictureBox1.Visible = true;
            pictureBox1.Enabled = true;
            drift1 = r.Next(maxdrift);
            random1 = r.Next(this.Width);
            x = r.Next(2);
            z = r.Next(3);
            if (x == 0)// Spawn left
            {
                y = r.Next(this.Height * 2 / 3);
                pictureBox1.Location = new Point(0, y);
                direcion1 = "right";
                if(z == 0)
                {
                    pictureBox1.Image = Properties.Resources.bird2rotated;
                }
                else if(z == 1)
                {
                    pictureBox1.Image = Properties.Resources.bird3rotated;
                }
                else if(z == 2)
                {
                    pictureBox1.Image = Properties.Resources.Storkbirdrotated;
                }
            }
            else// Spawn right
            {
                y = r.Next(this.Height * 2 / 3);
                pictureBox1.Location = new Point(this.Width -100, y);
                direcion1 = "left";
                if (z == 0)
                {
                    pictureBox1.Image = Properties.Resources.bird2;
                }
                else if (z == 1)
                {
                    pictureBox1.Image = Properties.Resources.bird3;
                }
                else if (z == 2)
                {
                    pictureBox1.Image = Properties.Resources.Storkbird;
                }
            }
        }
        private void SpawnBird2()
        {
            pictureBox2.Visible = true;
            pictureBox2.Enabled = true;
            drift2 = r.Next(maxdrift);
            random2 = r.Next(this.Width);
            x = r.Next(2);
            z = r.Next(3);
            if (x == 0)// Spawn left
            {
                y = r.Next(this.Height * 2 / 3);
                pictureBox2.Location = new Point(0, y);
                direcion2 = "right";
                if (z == 0)
                {
                    pictureBox2.Image = Properties.Resources.bird2rotated;
                }
                else if (z == 1)
                {
                    pictureBox2.Image = Properties.Resources.bird3rotated;
                }
                else if (z == 2)
                {
                    pictureBox2.Image = Properties.Resources.Storkbirdrotated;
                }
            }
            else// Spawn right
            {
                y = r.Next(this.Height * 2 / 3);
                pictureBox2.Location = new Point(this.Width - 100, y);
                direcion2 = "left";
                if (z == 0)
                {
                    pictureBox2.Image = Properties.Resources.bird2;
                }
                else if (z == 1)
                {
                    pictureBox2.Image = Properties.Resources.bird3;
                }
                else if (z == 2)
                {
                    pictureBox2.Image = Properties.Resources.Storkbird;
                }
            }
        }
        private void SpawnBird3()
        {
            pictureBox3.Visible = true;
            pictureBox3.Enabled = true;
            drift3 = r.Next(maxdrift);
            random3 = r.Next(this.Width);
            x = r.Next(2);
            z = r.Next(3);
            if (x == 0)// Spawn left
            {
                y = r.Next(this.Height * 2 / 3);
                pictureBox3.Location = new Point(0, y);
                direcion3 = "right";
                if (z == 0)
                {
                    pictureBox3.Image = Properties.Resources.bird2rotated;
                }
                else if (z == 1)
                {
                    pictureBox3.Image = Properties.Resources.bird3rotated;
                }
                else if (z == 2)
                {
                    pictureBox3.Image = Properties.Resources.Storkbirdrotated;
                }
            }
            else// Spawn right
            {
                y = r.Next(this.Height * 2 / 3);
                pictureBox3.Location = new Point(this.Width - 100, y);
                direcion3 = "left";
                if (z == 0)
                {
                    pictureBox3.Image = Properties.Resources.bird2;
                }
                else if (z == 1)
                {
                    pictureBox3.Image = Properties.Resources.bird3;
                }
                else if (z == 2)
                {
                    pictureBox3.Image = Properties.Resources.Storkbird;
                }
            }
        }
        private void SpawnBird4()
        {
            pictureBox4.Visible = true;
            pictureBox4.Enabled = true;
            drift4 = r.Next(maxdrift);
            random4 = r.Next(this.Width);
            x = r.Next(2);
            z = r.Next(3);
            if (x == 0)// Spawn left
            {
                y = r.Next(this.Height * 2 / 3);
                pictureBox4.Location = new Point(0, y);
                direcion4 = "right";
                if (z == 0)
                {
                    pictureBox4.Image = Properties.Resources.bird2rotated;
                }
                else if (z == 1)
                {
                    pictureBox4.Image = Properties.Resources.bird3rotated;
                }
                else if (z == 2)
                {
                    pictureBox4.Image = Properties.Resources.Storkbirdrotated;
                }
            }
            else// Spawn right
            {
                y = r.Next(this.Height*2/3);
                pictureBox4.Location = new Point(this.Width - 100, y);
                direcion4 = "left";
                if (z == 0)
                {
                    pictureBox4.Image = Properties.Resources.bird2;
                }
                else if (z == 1)
                {
                    pictureBox4.Image = Properties.Resources.bird3;
                }
                else if (z == 2)
                {
                    pictureBox4.Image = Properties.Resources.Storkbird;
                }
            }
        }

        // Movment timer game timer tick
        private void timer1_Tick(object sender, EventArgs e)
        {
            if (bird1 && direcion1 == "right")
            {
                pictureBox1.Location = new Point(pictureBox1.Location.X + spead, pictureBox1.Location.Y + maxdrift -1 - drift1);
                if (pictureBox1.Location.X > this.Width)
                {
                    pictureBox1.Enabled = false;
                    pictureBox1.Visible = false;
                    random1 = r.Next(intrevals);
                    timer1.Enabled = true;
                }
            }
            else if (bird1 && direcion1 == "left")
            {
                pictureBox1.Location = new Point(pictureBox1.Location.X - spead, pictureBox1.Location.Y + maxdrift - 1 - drift1);
                if (pictureBox1.Location.X < 0)
                {
                    pictureBox1.Enabled = false;
                    pictureBox1.Visible = false;
                    random1 = r.Next(intrevals);
                    timer1.Enabled = true;
                }
            }
            pictureBox1.Refresh();
            if (bird2 && direcion2 == "right")
            {
                pictureBox2.Location = new Point(pictureBox2.Location.X + spead, pictureBox2.Location.Y + maxdrift - 1 - drift2);
                if (pictureBox2.Location.X > this.Width)
                {
                    pictureBox2.Enabled = false;
                    pictureBox2.Visible = false;
                    random2 = r.Next(intrevals);
                    timer2.Enabled = true;
                }
            }
            else if (bird2 && direcion2 == "left")
            {
                pictureBox2.Location = new Point(pictureBox2.Location.X - spead, pictureBox2.Location.Y + maxdrift - 1 - drift2);
                if (pictureBox2.Location.X < 0)
                {
                    pictureBox2.Enabled = false;
                    pictureBox2.Visible = false;
                    random2 = r.Next(intrevals);
                    timer2.Enabled = true;
                }
            }
            if (bird3 && direcion3 == "right")
            {
                pictureBox3.Location = new Point(pictureBox3.Location.X + spead, pictureBox3.Location.Y + maxdrift - 1 - drift3);
                if (pictureBox3.Location.X > this.Width)
                {
                    pictureBox3.Enabled = false;
                    pictureBox3.Visible = false;
                    random3 = r.Next(intrevals);
                    timer3.Enabled = true;
                }
            }
            else if (bird3 && direcion3 == "left")
            {
                pictureBox3.Location = new Point(pictureBox3.Location.X - spead, pictureBox3.Location.Y + maxdrift - 1 - drift3);
                if (pictureBox3.Location.X < 0)
                {
                    pictureBox3.Enabled = false;
                    pictureBox3.Visible = false;
                    random3 = r.Next(intrevals);
                    timer3.Enabled = true;
                }
            }
            if (bird4 && direcion4 == "right")
            {
                pictureBox4.Location = new Point(pictureBox4.Location.X + spead, pictureBox4.Location.Y + maxdrift - 1 - drift4);
                if (pictureBox4.Location.X > this.Width)
                {
                    pictureBox4.Enabled = false;
                    pictureBox4.Visible = false;
                    random4 = r.Next(intrevals);
                    timer4.Enabled = true;
                }
            }
            else if (bird4 && direcion4 == "left")
            {
                pictureBox4.Location = new Point(pictureBox4.Location.X - spead, pictureBox4.Location.Y + maxdrift - 1 - drift4);
                if (pictureBox4.Location.X < 0)
                {
                    pictureBox4.Enabled = false;
                    pictureBox4.Visible = false;
                    random4 = r.Next(intrevals);
                    timer4.Enabled = true;
                }
            }
        }

        

        private void Form1_Click(object sender, EventArgs e)
        {
            if (gunactive)
            {
                Gunfire();
            }
        }

        private void Gunfire()
        {
            if (gunactive)
            {
                gunactive = false;
                player.Play();
                waitt = gunwaittime;
                timergun.Enabled = true;
                bulletsleft--;
                label2.Text = ("Bullets : " + bulletsleft);
            }
        }
        // disables the gun for a little after fire or alot when bullets end
        private void timergun_Tick(object sender, EventArgs e)
        {
            if(bulletsleft > 0)
            {
                waitt--;
                if (waitt < 0)
                {
                    gunactive = true;
                    label2.Text = ("Bullets : " + bulletsleft);
                    timergun.Enabled = false;
                }
            }
            else
            { 
                reload.Play();
                bulletsleft = 8;
                waitt = 4;
                
            }
        }


        // Bird PictureBoxes Click
        private void pictureBox1_Click_1(object sender, EventArgs e)
        {
            if (bird1 && gunactive)
            {
                score = score + (1*def);
                label1.Text = ("Score :" + score);
                Gunfire();
                pictureBox1.Image = Properties.Resources.explosion_animation;
                bird1 = false;
                random1 = 1;
                timer1.Enabled = true;
            }
        }

        private void pictureBox2_Click_1(object sender, EventArgs e)
        {
            if (bird2 && gunactive  )
            {
                score = score + (1* def);
                label1.Text = ("Score :" + score);
                Gunfire();
                pictureBox2.Image = Properties.Resources.explosion_animation;
                bird2 = false;
                random2 = 1;
                timer2.Enabled = true;
            }
        }

        private void pictureBox3_Click_1(object sender, EventArgs e)
        {
            if (bird3 && gunactive)
            {
                score = score + (1*def);
                label1.Text = ("Score :" + score);
                Gunfire();
                pictureBox3.Image = Properties.Resources.explosion_animation;
                bird3 = false;
                random3 = 1;
                timer3.Enabled = true;
            }
        }

        private void pictureBox4_Click_1(object sender, EventArgs e)
        {
            if (bird4 && gunactive)
            {
                score = score + (1* def);
                label1.Text = ("Score :" + score);
                Gunfire();
                pictureBox4.Image = Properties.Resources.explosion_animation;
                bird4 = false;
                random4 = 1;
                timer4.Enabled = true;
            }
        }

        private void label2_Click(object sender, EventArgs e)
        {

        }
        // counts time remaining and ends game
        private void timer5_Tick(object sender, EventArgs e)
        {
            totaltime--;
            label3.Text = ("Time Left : " + totaltime);
            if(totaltime < 0)
            {
                gameTimer.Enabled = false;
                gameTimer.Interval = 60;
                timer1.Enabled = false;
                timer2.Enabled = false;
                timer3.Enabled = false;
                timer4.Enabled = false;
                timer5.Enabled = false;
                pictureBox1.Enabled = false;
                pictureBox2.Enabled = false;
                pictureBox3.Enabled = false;
                pictureBox4.Enabled = false;
                pictureBox1.Visible = false;
                pictureBox2.Visible = false;
                pictureBox3.Visible = false;
                pictureBox4.Visible = false;
                pictureBox5.Visible = false;
                gunactive = false;
                count = 0;
                printed = false;
                richTextBox1.Visible = true;
                foreach (string line in System.IO.File.ReadLines("textfiles\\score.txt"))
                {
                    tempst = "";
                    tempin = 0;
                    for (int i = 0; i < line.Length; i++)
                    {
                        if (Char.IsDigit(line[i]))
                            tempst += line[i];
                    }
                    count++;
                    tempin = Int32.Parse(tempst);
                    if (score > tempin && !printed)
                    {
                        printed = true;
                        richTextBox1.Text = richTextBox1.Text + name + " ---------------- " + " " + score + " \n";
                    }
                    richTextBox1.Text = richTextBox1.Text + line + "\n";
                    System.Console.WriteLine(line);
                    //MessageBox.Show("" + ind + " " + tempin);
                }
                if (!printed)
                {
                    richTextBox1.Text = richTextBox1.Text + name + " ---------------- " + " " + score + " \n";
                }
                richTextBox1.SaveFile("textfiles\\score.txt", RichTextBoxStreamType.PlainText);
            }
        }
    }
}

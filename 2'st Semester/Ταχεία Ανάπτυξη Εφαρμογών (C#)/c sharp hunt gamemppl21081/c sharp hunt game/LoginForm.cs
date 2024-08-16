using System;
using System.Collections.Generic;
using System.ComponentModel;
using System.Data;
using System.Drawing;
using System.Linq;
using System.Text;
using System.Threading.Tasks;
using System.Windows.Forms;

namespace c_sharp_hunt_game
{
    public partial class LoginForm : Form
    {
        int defic = 1;
        public LoginForm()
        {
            InitializeComponent();
        }

        private void button1_Click(object sender, EventArgs e)
        {
            textBox4.Text = ("Easy");
            defic = 1;
        }

        private void button2_Click(object sender, EventArgs e)
        {
            textBox4.Text = ("Medium");
            defic = 2;
        }

        private void button3_Click(object sender, EventArgs e)
        {
            textBox4.Text = ("Hard");
            defic = 3;
        }

        private void button4_Click(object sender, EventArgs e)
        {
            if (textBox2.Text == "")
            {
                MessageBox.Show("Username cannot be empty !");
            }
            else
            {
                Form1 x = new Form1(textBox2.Text, defic);
                x.Show();
            }
        }
    }
}

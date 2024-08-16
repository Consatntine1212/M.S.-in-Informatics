using System;
using System.Collections.Generic;
using System.ComponentModel;
using System.Data;
using System.Drawing;
using System.Linq;
using System.Media;
using System.Text;
using System.Threading.Tasks;
using System.Windows.Forms;

namespace RAD2022_2
{
    public partial class Form1 : Form
    {
        public static String data;
        public Form1()
        {
            InitializeComponent();
        }

        private void button1_Click(object sender, EventArgs e)
        {
            data = textBox1.Text;
            Form2 f2 = new Form2(textBox1.Text);
            f2.Show();
        }

        private void button2_Click(object sender, EventArgs e)
        {
            pictureBox1.ImageLocation = @"images\cat.jpg";
        }

        private void pictureBox1_Click(object sender, EventArgs e)
        {
            MessageBox.Show("Miaou!");
        }

        private void button3_Click(object sender, EventArgs e)
        {
            richTextBox1.LoadFile("textfiles\\unipi.txt",RichTextBoxStreamType.PlainText);
        }

        private void button4_Click(object sender, EventArgs e)
        {
            if(colorDialog1.ShowDialog() == DialogResult.OK)
            {
                this.BackColor = colorDialog1.Color;
            }
            else
            {
                MessageBox.Show("You canceled the operation!");
            }
            //colorDialog1.ShowDialog();
            //this.BackColor = colorDialog1.Color;
        }

        private void button5_Click(object sender, EventArgs e)
        {
            openFileDialog1.InitialDirectory = Application.StartupPath+"\\textfiles";
            if(openFileDialog1.ShowDialog() == DialogResult.OK)
            {
                richTextBox1.LoadFile(openFileDialog1.FileName, RichTextBoxStreamType.PlainText);
            }
        }

        private void button6_Click(object sender, EventArgs e)
        {
            if(saveFileDialog1.ShowDialog() == DialogResult.OK)
            {
                richTextBox1.SaveFile(saveFileDialog1.FileName, RichTextBoxStreamType.PlainText);
            }
        }

        private void richTextBox1_TextChanged(object sender, EventArgs e)
        {

        }

        private void button7_Click(object sender, EventArgs e)
        {
            SoundPlayer player = new SoundPlayer("BSB.wav");
            player.Play();
        }

        private void Form1_Load(object sender, EventArgs e)
        {

        }
    }
}

namespace Personal_Home_Assistant
{
    public class Events
    {
        private string time;
        private string name;
        private string shoes;
        private string address;
        private string transfer;
        public Events() { }
        public Events(string time, string name, string shoes, string address, string transfer)
        {
            this.time = time;
            this.name = name;
            this.shoes = shoes;
            this.address = address;
            this.transfer = transfer;
        }
        
        
    }
}

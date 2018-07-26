using System;



namespace BMICalculator
{
    
    class BMICalculator
    {
        public static string InputString;
        public static double Weight;
        public static double Height;
        public static void Main() {
   
        Console.WriteLine("Which Method do you Prefer Metric or Imperial \n Click (M) for Metric and (I) for Imperial ");
        InputString = Console.ReadLine();                   
        BMITest bmi = new BMITest();
        bmi.ConditionMetricAndImperial(InputString);

            if(InputString == "M" || InputString == "m")
            {            
                Console.WriteLine("Input your Meters:");
                Convert.ToString(Height); 
                Height = double.Parse(Console.ReadLine()); 
             
                Console.WriteLine("Input your Kilograms:");
                Convert.ToDouble(Weight);
                Weight = double.Parse(Console.ReadLine());
            }
            else if (InputString == "I" || InputString == "i")
            {
                Console.WriteLine("Input your Inches:");
                Convert.ToString(Height);
                Height = double.Parse(Console.ReadLine());
     
                Console.WriteLine("Input your Pounds:");
                Convert.ToDouble(Weight);
                Weight = double.Parse(Console.ReadLine());
            }
         bmi.BMICompute(Weight, Height);
         bmi.BMIEvaluate(Weight, Height);

        }


       


    }
}




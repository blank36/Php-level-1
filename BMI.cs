using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;



namespace BMICalculator
{
    class BMITest
    {
        double  BMIA,BMIA2;

     

        public void ConditionMetricAndImperial(string inputString)
        {

            if (inputString == "M")
            {
                Console.WriteLine("Okay You Choose Metric");
            }
            else if (inputString == "I")
            {
                Console.WriteLine("Okay You Choose Imperial");
            }
            else
            {
                Console.Write("Wrong Input");
                Console.ReadKey();
            }
        }

        public void BMICompute(double Weight, double Height)
        {
            BMIA = (Weight / ((Height) * (Height)));
            Console.WriteLine("Your BMIA is "+ BMIA);
        }

        public void BMIEvaluate(double Weight, double Height)
       {    
    
            BMIA2 = (Weight / ((Height) * (Height)));
            if(BMIA2 < 18.5)
            {
                Console.WriteLine("You are Underweight");
                Console.ReadKey();
            }
            else if(BMIA2 > 18.5 && BMIA < 24.9)
            {
                Console.WriteLine("You are Normal");
                Console.ReadKey();
            }
            else if(BMIA2 > 25 && BMIA < 29.9)
            {
                Console.WriteLine("You are Overweight");
                Console.ReadKey();
            }
            else if (BMIA2 > 30)
            {
                Console.WriteLine("You are Obese");
                Console.ReadKey();
            }
        }


    }
}
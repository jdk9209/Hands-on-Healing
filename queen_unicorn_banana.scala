// Main function
def main() : Unit = {

  // Welcome message
  println("Welcome to Hands on Healing!\n")

  // Variables
  val treatments = Array("massage", "acupuncture", "reiki", "chiropractic")
  var patientName = ""
  var treatmentIndex = 0
  
  // Ask for patient name
  print("What is the patient's name? ")
  patientName = scala.io.StdIn.readLine()
  
  // Feedback to user
  println("\nThanks, " + patientName + "! Let's get started. \n")
  
  // Ask for treatment selection
  print("Which treatment would you like? ")
  for (i <- 0 until treatments.length){
    print(treatments(i) + " ")
  }
  print("\n")
  
  // Get selection from user
  treatmentIndex = scala.io.StdIn.readInt() 
  while (treatmentIndex < 0 || treatmentIndex >= treatments.length) {
    println("Invalid selection!")
    print("Which treatment would you like? ")
    treatmentIndex = scala.io.StdIn.readInt()
  }
  
  // Let the user know what they have selected
  println("\nYou have selected " + treatments(treatmentIndex) + "!")

  // Ask the user for their preferences
  println("\nWhat would you like to do for this treatment?")
  print("Please describe what you would like to do: ")
  
  // Read in user's preferences
  var userPreferences = scala.io.StdIn.readLine()
  
  // Let the user know that their preferences have been accepted
  println("\nThanks for your preferences! Let's get started.\n")

  // Start treatment
  println("Starting your " + treatments(treatmentIndex) + " treatment!")
  println("Following your preferences: " + userPreferences)
  
  // Notify user of completion
  println("\nYour treatment is complete! \n")
  
  // Ask user for feedback
  print("Would you like to provide feedback about your experience? (y/n) ")
  
  // Read in user response
  var response = scala.io.StdIn.readChar()
  
  // Act based on user response
  if (response == 'y' || response == 'Y') {
    print("Please provide a rating from 1-10 with 10 being the best: ")
    
    // Read in user rating
    var rating = scala.io.StdIn.readInt()
    
    // Notify user of rating acceptance
    println("Thanks for your rating of " + rating + "!")
  } else {
    println("OK, no feedback provided")
  }
  
  // Thank user for visit
  println("\nThanks for visiting Hands on Healing, " + patientName + "!")

}

// Call main function
main()
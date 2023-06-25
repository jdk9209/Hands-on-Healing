#1 
#Creating a function to calculate the healing power of hands
healingPower <- function(data) {
 
  #Calculating the average for the given data
  m <- mean(data)
  
  #Calculating the difference between the actual values and the mean
  diff <- data - m
  
  #Calculating the square of the difference
  sqDiff <- diff**2
  
  #Calculating the variance
  variance <- mean(sqDiff)
  
  #Calculating the standard deviation
  sd <- sqrt(variance)
  
  # Calculating the healing power 
  healingPower <- sd/m
  
  # Returning the healingPower
  return(healingPower)
  
}

#2
#Creating a vector for storing data
data <- c()

#3
#Creating a for loop for inputting the data
for(i in 1:200){
 
  #Printing the message
  print("Enter the healing power score:")
  
  #Taking the input
  userInput <- readline(prompt="")
  
  #Converting the input to numeric
  numberInput <- as.numeric(userInput)
  
  #Appending the data to the vector
  data <- c(data,numberInput)  
  
}

#4
#Calculating the healing power 
healingPower <- healingPower(data)

#5
#Printing the healing power
print(healingPower)

#6
#Writing data to the text file
write.table(healingPower, file = "Hands on Healing.txt",sep=",")
# create a class called "HandsOnHealing"
class HandsOnHealing 

  def initialize(name, modality) 
    @name = name
    @modality = modality 
  end 

  # define a method to display the healing modality
  def display_modality
    puts "This session will utilize #{@modality}"
  end 

  # define a method to set the healing modality
  def set_modality(modality)
    @modality = modality 
  end 

  # define a method to display the name of the healer 
  def display_healer_name 
    puts "#{@name} will be guiding this healing session"
  end 

  # create a method to prepare the healing space
  def prepare_space 
    puts "We will begin by clearing the space and setting the intention"
  end 

  # create a method to start the healing session
  def start_session 
    puts "Let's begin the healing session!" 
  end 

  # define a method to bring the healing to an end
  def end_session 
    puts "Thank you for allowing me to guide you through this journey" 
  end 

end 

# create an instance of the HandsOnHealing class
healer = HandsOnHealing.new("Jane Doe", "Reiki")

# call methods from the HandsOnHealing class
healer.display_modality
healer.set_modality("Shamanic Healing")
healer.display_modality
healer.display_healer_name
healer.prepare_space 
healer.start_session 
healer.end_session
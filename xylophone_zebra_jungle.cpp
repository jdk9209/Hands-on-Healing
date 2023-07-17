#include <iostream>
#include <string>

using namespace std;

// Function prototypes
void introduction(void);
void welcomeUser(void);
void askForHealing(void);
void printHealingOptions(void);
void askForUserHealingChoice(int &healingChoice);
void firstAidHealing(void);
void physicalHealing(void);
void psychologicalHealing(void);
void energyHealing(void);
void emotionalHealing(void);
void spiritualHealing(void);
void printHealingChoice(int healingChoice);

// Main
int main()

{
	int healingChoice;

	// Introduce the program
	introduction();

	// Welcome the user
	welcomeUser();

	// Ask the user what kind of healing they need
	askForHealing();

	// Print the healing options
	printHealingOptions();

	// Ask user to make a choice
	askForUserHealingChoice(healingChoice);

	// Print the user's choice 
	printHealingChoice(healingChoice);

	// Execute the healing option chosen by user
	switch (healingChoice){

		case 1:
		firstAidHealing();
		break;

		case 2:
		physicalHealing();
		break;

		case 3:
		psychologicalHealing();
		break;

		case 4:
		energyHealing();
		break;

		case 5:
		emotionalHealing();
		break;

		case 6:
		spiritualHealing();
		break;
		
		default:
		cout << "Invalid choise. Please try again.\n";
		break;
	}
	
	return 0;
}

// Program introduction
void introduction(void)
{
	cout << "--------------------------\n";
	cout << "Hands on Healing Program\n";
	cout << "--------------------------\n\n";
}

// Welcome user
void welcomeUser(void)
{
	cout << "Welcome to the Hands on Healing Program!\n\n";
}

// Ask user what kind of healing they need
void askForHealing(void)
{
	cout << "What kind of healing do you need?\n\n";
}

// Print healing options
void printHealingOptions(void)
{
	cout << "1. First Aid Healing\n";
	cout << "2. Physical Healing\n";
	cout << "3. Psychological Healing\n";
	cout << "4. Energy Healing\n";
	cout << "5. Emotional Healing\n";
	cout << "6. Spiritual Healing\n\n";
}

// Ask user for their healing choice
void askForUserHealingChoice(int &healingChoice)
{
	cout << "Please enter your choice(1-6): ";
	cin >> healingChoice;
	cout << endl;
}

// First Aid Healing
void firstAidHealing(void)
{
	cout << "First Aid Healing:\n";
	cout << "You are advised to take first aid courses to gain knowledge and skills on how to help.\n";
}

// Physical Healing
void physicalHealing(void)
{
	cout << "Physical Healing:\n";
	cout << "You are advised to go for regular check-ups and concentrate on good nutrition and regular exercise.\n";
}

// Psychological Healing
void psychologicalHealing(void)
{
	cout << "Psychological Healing:\n";
	cout << "You are advised to seek the help of a trained professional to learn ways to cope with psychological issues.\n";
}

// Energy Healing
void energyHealing(void)
{
	cout << "Energy Healing:\n";
	cout << "You are advised to explore various healing modalities such as Reiki, acupuncture and yoga.\n";
}

// Emotional Healing
void emotionalHealing(void)
{
	cout << "Emotional Healing:\n";
	cout << "You are advised to find ways to express your feelings in a healthy way such as journaling, drawing and creative writing.\n";
}

// Spiritual Healing
void spiritualHealing(void)
{
	cout << "Spiritual Healing:\n";
	cout << "You are advised to connect to your higher self and explore ways to find peace and purpose.\n";
}

// Print user's choice of healing
void printHealingChoice(int healingChoice)
{
	cout << "You have chosen: ";

	switch (healingChoice){

		case 1:
		cout << "First Aid Healing\n\n";
		break;

		case 2:
		cout << "Physical Healing\n\n";
		break;

		case 3:
		cout << "Psychological Healing\n\n";
		break;

		case 4:
		cout << "Energy Healing\n\n";
		break;

		case 5:
		cout << "Emotional Healing\n\n";
		break;

		case 6:
		cout << "Spiritual Healing\n\n";
		break;
		
		default:
		cout << "Please enter a valid choice(1-6).\n";
		break;
	}
}
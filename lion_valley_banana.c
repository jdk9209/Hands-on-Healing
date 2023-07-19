#include <stdio.h>
#include <string.h>

// Constant definitions
#define MAX_NAME_LEN 50
#define MAX_HEALING_LEN 100

// Struct definition
struct healing_data {
   char name[MAX_NAME_LEN];
   char healing[MAX_HEALING_LEN];
};

// Function declarations
struct healing_data* GetHealingData(FILE *f);
void PrintHealingData(struct healing_data *data);
void FreeHealingData(struct healing_data *data);

int main(int argc, char *argv[])
{
   const char *fname = argv[1];

   // Open the healing data file
   FILE *f = fopen(fname, "r");
   if (f == NULL) {
      printf("Error: unable to open file %s!\n", fname);
      return 1;
   }

   // Read the healing data and print it
   struct healing_data *data = GetHealingData(f);
   while (data != NULL) {
      PrintHealingData(data);
      FreeHealingData(data);
      data = GetHealingData(f);
   }

   fclose(f);
   return 0;
}

// Read the next healing data from the given file
struct healing_data* GetHealingData(FILE *f)
{
   struct healing_data *data = malloc(sizeof(struct healing_data));
   if (data == NULL) {
      printf("Error: unable to allocate memory!\n");
      return NULL;
   }

   if (fscanf(f, "%s %[^\n]", data->name, data->healing) == EOF) {
      free(data);
      return NULL;
   }

   return data;
}

// Print the contents of the given healing data structure
void PrintHealingData(struct healing_data *data)
{
   printf("Name: %s\nHealing: %s\n\n", data->name, data->healing);
}

// Free the given healing data
void FreeHealingData(struct healing_data *data)
{
   free(data);
}
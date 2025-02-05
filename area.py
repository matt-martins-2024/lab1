import sys

def calculate_area(radius):
    return 3.14159 * radius * radius

if __name__ == "__main__":
    if len(sys.argv) != 2:
        # Provide a default value for testing
        radius = 5  # Default radius value
        print("No command-line arguments provided, using default radius:", radius)
    else:
        try:
            radius = float(sys.argv[1])
        except ValueError:
            print("Error: Please enter a valid number.")
            sys.exit(1)

    result = calculate_area(radius)
    print(f"The area of a circle with radius {radius} is {result}.")

#matthew martins 

import random
def make_twelve_rand_int():
    rand_arr = []
    for i in range(12):
        rand_int = random.randint(1, 100)
        rand_arr.append(rand_int)
    return rand_arr

def check_odds(number):
    if number % 2 == 0:
        return "genap"
    else:
        return "ganjil"

def filter_odds(array, type):
    new_arr = []
    if type == "genap":
        for number in array:
            if number % 2 == 0:
                new_arr.append(number)
    elif type == "ganjil":
        for number in array:
            if number % 2 != 0:
                new_arr.append(number)
    return new_arr

filter = int(input("Enter Filter : "))
rand_arr = make_twelve_rand_int()
print("Array : " + str(rand_arr))
check_number = check_odds(filter)
print("Filter : " + str(check_number))
arr_filtered = filter_odds(rand_arr, check_number)
print("Result : " + str(arr_filtered))

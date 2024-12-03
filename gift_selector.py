#!/usr/bin/env python3
import sys

gifts = [
    "Book", "Toy", "Gadget", "Video Game", "Headphones",
    "Smartphone", "Laptop", "Watch", "Shoes", "Wallet",
    "Headset", "Camera", "Drone", "Smart Watch", "Bluetooth Speaker"
]

def is_numeric(value):
    try:
        int(value)
        return True
    except ValueError:
        return False

def calculate_gift_code(selections):
    code = 0
    for index in selections:
        code |= (1 << int(index))
    return code

args = sys.argv[1:]
if not all(is_numeric(arg) for arg in args):
    print("Content-Type: text/html\n")
    print("<p>Error: All inputs must be numeric gift indices.</p>")
    sys.exit(1)

selected_indices = [int(arg) for arg in args]
if any(i < 0 or i >= len(gifts) for i in selected_indices):
    print("Content-Type: text/html\n")
    print("<p>Error: Invalid gift indices.</p>")
    sys.exit(1)

selected_gifts = [gifts[i] for i in selected_indices]
gift_code = calculate_gift_code(selected_indices)

print("Content-Type: text/html\n")
print("<h1>Gift Selection Extravaganza</h1>")
print("<h2>Available Gifts:</h2>")
for i, gift in enumerate(gifts):
    print(f"{i}: {gift}<br>")
print(f"<h2>Selected Gifts: {', '.join(selected_gifts)}</h2>")
print(f"<h2>Unique Gift Code: {gift_code}</h2>")
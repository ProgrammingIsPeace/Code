import pygame
import sys
import random

class_stats = {
    "Knight": {"HP": 150, "MP": 10, "Str": 10, "Int": 5, "Tempo": 0.75, "Heal": 5, "Armor": 45},
    "Mage": {"HP": 120, "MP": 20, "Str": 5, "Int": 15, "Tempo": 1.25, "Heal": 3.5, "Armor": 15},
    "Assassin": {"HP": 72, "MP": 0, "Str": 2, "Int": 5, "Tempo": 7.31, "Heal": 2, "Armor": 0},
    "Necromancer": {"HP": 95, "MP": 80, "Str": 0, "Int": 20, "Tempo": 0.6, "Heal": 1.5, "Armor": 5},
    "Rogue": {"HP": 130, "MP": 15, "Str": 18.5, "Int": 8, "Tempo": 1.0, "Heal": 1, "Armor": 25},
    "Cleric": {"HP": 140, "MP": 35, "Str": 6, "Int": 12, "Tempo": 1.0, "Heal": 25, "Armor": 7.5}
}
user_stats = {}
class_selection = input("What class would you like to play")
if class_selection == "Knight":
    user_stats = class_stats["Knight"]
elif class_selection == "Mage":
    user_stats = class_stats["Mage"]
elif class_selection == "Assassin":
    user_stats = class_stats["Assassin"]
elif class_selection == "Necromancer":
    user_stats = class_stats["Necromancer"]
elif class_selection == "Rogue":
    user_stats = class_stats["Rogue"]
elif class_selection == "Cleric":
    user_stats = class_stats["Cleric"]

xp = 0
lvl = 1

print(user_stats)
print("you have: ", xp, "xp")
print("your level: ", lvl)

enemies_stats = {
    "Goblin": {"HP": 15, "MP": 2, "dmg": 2, "tempo": 1},
    "Spider": {"HP": 35, "MP": 2, "dmg": 5, "tempo": 1.25}
}

def fight():
    xp = None
    lvl = None
    enemy = random.choice(["Goblin", "Spider"])
    print("Enemy spawns: ", enemy)

    def player_attack():
        return random.uniform(0.8, 1.2) * user_stats["Str"] * user_stats["Tempo"]

    def enemy_attack():
        return random.uniform(0.8, 1.2) * enemies_stats[enemy]["dmg"] * enemies_stats[enemy]["tempo"]

    while user_stats["HP"] > 0 and enemies_stats[enemy]["HP"] > 0:
        print("\nBattle Menu:")
        print("1. Attack")
        print("2. Heal")
        choice = input("Choose an action: ")

        if choice == "1":

            damage_to_enemy = player_attack()
            enemies_stats[enemy]["HP"] -= damage_to_enemy
            print("You dealt", damage_to_enemy, "damage to the", enemy)

            damage_to_player = enemy_attack()
            user_stats["HP"] -= damage_to_player
            print("The", enemy, "dealt", damage_to_player, "damage to you")

        elif choice == "2":

            heal_amount = user_stats["Heal"]
            user_stats["HP"] += heal_amount
            print("You healed for", heal_amount, "HP")

            damage_to_player = enemy_attack()
            user_stats["HP"] -= damage_to_player
            print("The", enemy, "dealt", damage_to_player, "damage to you")

        else:
            print("Invalid choice. Try again.")

    if user_stats["HP"] <= 0:
        print("You were defeated in battle. Game over.")

    elif enemies_stats[enemy]["HP"] <= 0:
        print("You defeated the", enemy, "! You gained 10 xp.")
        xp += 10
        if xp > 100:
            lvl = 2
        print("You are now level", lvl, "with", xp, "xp.")

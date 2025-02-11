<?php
// Kelas induk (Parent Class)
class Animal {
    // Properti
    public $name;

    // Konstruktor untuk menginisialisasi nama hewan
    public function __construct($name) {
        $this->name = $name;
    }

    // Metode untuk suara hewan
    public function makeSound() {
        echo "Some generic animal sound.\n";
    }
}

// Kelas anak (Child Class) yang mewarisi kelas Animal
class Dog extends Animal {
    // Metode untuk suara anjing
    public function makeSound() {
        echo "Bark! Bark!\n";
    }
}

// Kelas anak (Child Class) yang mewarisi kelas Animal
class Cat extends Animal {
    // Metode untuk suara kucing
    public function makeSound() {
        echo "Meow! Meow!\n";
    }
}

// Membuat objek dari kelas Dog dan Cat
$dog = new Dog("Buddy");
$cat = new Cat("Whiskers");

// Menampilkan nama dan suara masing-masing hewan
echo $dog->name . " says: ";
$dog->makeSound();  // Output: Buddy says: Bark! Bark!

echo $cat->name . " says: ";
$cat->makeSound();  // Output: Whiskers says: Meow! Meow!
?>
import './bootstrap';

import.meta.glob([
    '../image/**'
])

document.querySelector('.custom-select').addEventListener('change', function() {
    var selectedOption = this.options[this.selectedIndex];
    selectedOption.style.backgroundColor = '#333'; // Change this to your desired background color
    selectedOption.style.color = '#fff'; // Change this to your desired text color
});


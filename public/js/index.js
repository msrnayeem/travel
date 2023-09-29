function category() {
    var selected = document.getElementById('tour-type').value;
    var destination = document.getElementById('destination-container');
    var lenght = document.getElementById('lenght-container');
    var depart = document.getElementById('depart-container');

    //1= umra 2 = hajj 3 = tour

    if (selected == 3) {
        destination.style.display = 'block';
        lenght.style.display = 'block';
        depart.style.display = 'block';
    } else if (selected == 2) {
        destination.style.display = 'none';
        lenght.style.display = 'none';
        depart.style.display = 'none';
    } else {
        destination.style.display = 'none';
        lenght.style.display = 'block';
        depart.style.display = 'block';
    }

}

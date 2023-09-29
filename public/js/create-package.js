
$(document).ready(function () {
    $('input[type="radio"]').change(function () {

        var name = $(this).attr('name');
        var selectedValue = $(this).val();

        var characters = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        var animationInterval = setInterval(function () {
            var shuffledText = '';
            for (var i = 0; i < selectedValue.length; i++) {
                shuffledText += characters.charAt(Math.floor(Math.random() * characters
                    .length));
            }
            $('.' + name).text(shuffledText);
        }, 50);

        setTimeout(function () {
            clearInterval(animationInterval);
            $('.' + name).text(selectedValue);
        }, 500);
    });


    function shuffleString(str) {
        var array = str.split('');
        for (var i = array.length - 1; i > 0; i--) {
            var j = Math.floor(Math.random() * (i + 1));
            var temp = array[i];
            array[i] = array[j];
            array[j] = temp;
        }

        return array.slice(0, 15).join('');
    }


    $('input[type="checkbox"]').change(function () {

        var groupName = $(this).attr('name');


        var checkedValues = $('input[name="' + groupName + '"]:checked').map(function () {
            return $(this).val();
        }).get();


        var $pElement = $('.' + groupName);
        var originalText = $pElement.text();
        var shuffledText = shuffleString(originalText);


        var interval = setInterval(function () {
            $pElement.text(shuffleString($pElement.text()));
        }, 50);

        setTimeout(function () {
            clearInterval(interval);
            $pElement.text(checkedValues.join(', '));
        }, 500);
    });
});

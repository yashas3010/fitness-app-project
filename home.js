$(document).ready(function () {
    $('.wrap li:lt(4)').show();
    $('.less').hide();
    var items =  50;
    var shown =  4;
    $('.more').click(function () {
        $('.less').show();
        shown = $('.wrap li:visible').length+8;
        if(shown< items) {
          $('.wrap li:lt('+shown+')').show(300);
        } else {
          $('.wrap li:lt('+items+')').show(300);
          $('.more').hide();
        }
    });
    $('.less').click(function () {
        $('.wrap li').not(':lt(4)').hide(300);
        $('.more').show();
        $('.less').hide();
    });
});
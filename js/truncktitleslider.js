
var maxLen = 80;
var titles = jQuery ('.titleslider')
for (i in titles) {
  if(titles[i].innerHTML.length > maxLen){
   // jQuery(titles[i]).css('font-size', '0.8em');
     titles[i].innerHTML = titles[i].innerHTML.substr(0, maxLen)+"...";
  }
}

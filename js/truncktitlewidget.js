
var minLen = 45;
var titleslast = jQuery ('.titlelast')
for (x in titleslast) {
  if(titleslast[x].innerHTML.length > minLen) {
    // jQuery(titleslast[x]).css('font-size', '0.8em');
    titleslast[x].innerHTML = titleslast[x].innerHTML.substr(0, minLen)+"...";
  }
}

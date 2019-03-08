
/**
 * First, we will load all of this project's Javascript utilities and other
 * dependencies. Then, we will be ready to develop a robust and powerful
 * application frontend using useful Laravel and JavaScript libraries.
 */

require('./bootstrap');
//semantic
require('../semantic/semantic.min.js');

//喜欢加载
$('#like').click(function(){
    $('#like').addClass('loading');
});

$('select.dropdown')
  .dropdown()
;

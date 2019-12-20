<?php
include_once './util/corpo.php';
cabeca();
?>


<script src="js/tooltip.js" type="text/javascript"></script>

<a class="btn tooltipped" data-position="bottom" data-tooltip="I am a tooltip">Hover me!</a>
<script type="text/javascript">

  document.addEventListener('DOMContentLoaded', function() {
    var elems = document.querySelectorAll('.tooltipped');
    var instances = M.Tooltip.init(elems, options);
  });

  // Or with jQuery

  $(document).ready(function(){
    $('.tooltipped').tooltip();
  });
      
</script>
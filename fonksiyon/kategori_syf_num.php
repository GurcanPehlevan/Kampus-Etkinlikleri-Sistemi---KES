<center>  <nav>
 <ul class="pagination">
    <li>
      
	<?php echo '<a href="kategori.php?id='.$kategori.'" aria-label="Previous">
        <span aria-hidden="true">&laquo;</span>
      </a>
    </li>';
	for($a=1;$a<=$sayfa_sayisi;$a++){
    echo '<li><a href="kategori.php?id='.$kategori.'&sayfa='.$a.'">'.$a.'</a></li>';
	}   
	echo '<li>
<a href="kategori.php?id='.$kategori.'&sayfa='.$sayfa_sayisi.'" aria-label="Next">';
?>

        <span aria-hidden="true">&raquo;</span>
      </a>
    </li>
  </ul>
</nav></center>
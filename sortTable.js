<script>
 
 // fonction permettant de trier le tableau ( function to sort the html table)
function sortTable() {
  var table, rows, switching, i, x, y,x1,y1, shouldSwitch;
  // get the table by ID
  table = document.getElementById("teams");
  //switch row is assumed true
  switching = true;
  /*Make a loop that will continue until no switching has been done:*/
  while (switching) {
    //start by saying: no switching is done:
    switching = false;
    rows = table.rows;
    /*Loop through all table rows (except the
    first, which contains table headers):*/
    for (i = 1; i < (rows.length - 1); i++) {
      //start by saying there should be no switching:
      shouldSwitch = false;
      /*Get the two elements you want to compare,
      one from current row and one from the next:*/
	  
	  // we sort by PTS then GOALDIFF
	  //pts
      x = rows[i].getElementsByTagName("TD")[7];
      y = rows[i + 1].getElementsByTagName("TD")[7];
	  
	  //goaldiff
      x1 = rows[i].getElementsByTagName("TD")[8];
      y1 = rows[i + 1].getElementsByTagName("TD")[8];
	  
	  
      //check if the two rows should switch place:
      if (x.innerHTML.toLowerCase() < y.innerHTML.toLowerCase()) {		  
        //if so, mark as a switch and break the loop:
        shouldSwitch = true;
        break;
      } else if (  (x.innerHTML.toLowerCase() == y.innerHTML.toLowerCase() ) && ( x1.innerHTML.toLowerCase() < y1.innerHTML.toLowerCase()) ) {		  
        //if so, mark as a switch and break the loop:
        shouldSwitch = true;
        break;
      } 
    }
    if (shouldSwitch) {
      /*If a switch has been marked, make the switch
      and mark that a switch has been done:*/
      rows[i].parentNode.insertBefore(rows[i + 1], rows[i]);
      switching = true;
    }
  }
}
sortTable();
</script>
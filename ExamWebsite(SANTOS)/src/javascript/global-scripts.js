// ============================Tabbed HTML Elements Toggler============================
function tabComponent(in_tabsClass,in_tabID) {
    var tabElements = document.getElementsByClassName(in_tabsClass);
    
    for(var tabCount = 0; tabCount < tabElements.length; tabCount++) {
        tabElements[tabCount].style.display = "none";
    }
    
    document.getElementById(in_tabID).style.display = "block";
}

// ============================Empty Table Label Initializer============================
function addEmptyText(in_emptyContainerID) {
    // Add EMPTY TEXT
    // Create & Set (CONTAINER CONTENT)
    var insert_detail_text = document.createElement("label");
    insert_detail_text.setAttribute("class", "c-label--admineditui-emptytext");
    insert_detail_text.innerHTML = "<center>The database table is empty.<br />No data to show here.</center>";

    // Get & Set (CONTAINER)
    var insert_detail_cell = document.getElementById(in_emptyContainerID);
    insert_detail_cell.setAttribute("class", "c-div--admineditui-emptytext");
    insert_detail_cell.appendChild(insert_detail_text);
}

// ============================Empty Table Label Toggler============================
function toggleEmptyText(in_itemCount, in_emptyContainerID, in_displayContainerID) {
    // Check if there are any rows in the fetched database table, if there is none, print this message and exit
    if(in_itemCount <= 0) {
        // Show EMPTY TEXT
        var insert_detail_text = document.getElementById(in_emptyContainerID);
        insert_detail_text.setAttribute("style", "display: block;");

        // Hide MAIN CONTAINER
        var insert_detail_text = document.getElementById(in_displayContainerID);
        insert_detail_text.setAttribute("style", "display: none;");
    }
    else {
        // Hide EMPTY TEXT
        var insert_detail_text = document.getElementById(in_emptyContainerID);
        insert_detail_text.setAttribute("style", "display: none;");
        
        // Show MAIN CONTAINER
        var insert_detail_text = document.getElementById(in_displayContainerID);
        insert_detail_text.setAttribute("style", "display: block;");
    }
}



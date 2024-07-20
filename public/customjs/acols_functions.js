function showSide() {
    document.getElementById("sideBar").style.display = "block";
}

function hideSide() {
    document.getElementById("sideBar").style.display = "none";
}

function showSearch() {
    document.getElementById("searchBar").style.display = "block";
    document.getElementById("searchButton").style.display = "none";
}

function myFunc(name) {
    //name="Oi"

    alert(name)
}

function confirmDelete() {
    let text = "Deleting a Column will Delete ALL NODES on that column.\nContinue?";
    if (confirm(text)) {
        console.log('deleting...');
        return true
    } else {
         console.log('canceled');
         return false
    }
    //confirm(text)

}

function showSideED(acolId) {
    document.getElementById("sideBarED").style.display = "block";

    $columnId=acolId
    $.ajax({
        url: `/getAcolDataED`,
        type: "GET",
        cache: false,
        data: {
            "id": acolId,

        },
        success: function(response) {
    
            //if success
            $acolName=response['acolName'];
            console.log($acolName);
            
            
            document.getElementById("nameED").value= $acolName
            document.getElementById("editform").action= '/acols/'+$columnId

            
            
    
        },
        error: function(error) {
    
            //...
    
        }
    });
}

function hideSideED() {
    document.getElementById("sideBarED").style.display = "none";
}    
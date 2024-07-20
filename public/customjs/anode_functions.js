function confirmDelete() {
    let text = "Are you sure? \nDeleting a Node will also Delete ALL CHILD NODES of that node.\nContinue Delete?";
    if (confirm(text)) {
        console.log('deleting...');
        return true
    } else {
         console.log('canceled');
         return false
    }
    //confirm(text)

}

function showSide() {
    document.getElementById("sideBarED").style.display = "none";

    document.getElementById("sideBar").style.display = "block";
    //document.getElementById("color").innerHTML = `<select><option>Empty</option></select>`;


}


function hideSide() {
    document.getElementById("sideBar").style.display = "none";
}




function showSideED(id, name, acol, parent, color) {
    document.getElementById("sideBar").style.display = "none";
    document.getElementById("sideBarED").style.display = "block";

    document.getElementById("nameED").value = name
    document.getElementById("nameED").innerHTML = name

    document.getElementById("selectedColumn").value = acol
    document.getElementById("selectedColumn").innerHTML = acol

    document.getElementById("selectedParent").value = parent
    document.getElementById("selectedParent").innerHTML = parent

    document.getElementById("selectedColor").value = color

    let string = color;
    let nColor = string[0].toUpperCase() + string.slice(1);

    document.getElementById("selectedColor").innerHTML = nColor


    document.getElementById("idED").value = id
    

    document.getElementById("editForm").action = "/anodes/" + id

    $.ajax({
        url: `/getParentEDFirstClick`,
        type: "GET",
        cache: false,
        data: {
            "id": id,
            "value": acol,
            "oldParent": parent
        },
        success: function(response) {
    
            //if success
            $anodeall=response['anodeall'];
            console.log($anodeall);

            $out=response['outputDiv']
            $outC=response['outputDivCol']

            console.log($out);
            console.log($outC);

            //$outval=response['outputValue']
            
            //document.getElementById("selectedParent").value = response['parent']
            document.getElementById("parentED").innerHTML= $out
            document.getElementById("columnED").innerHTML= $outC

            // document.getElementById("parentED").innerHTML= $outval

        
           getRowED();
            
    
        },
        error: function(error) {
    
            //...
    
        }
    });

}



function hideSideED() {
    document.getElementById("sideBarED").style.display = "none";



}

function showSearch() {
    document.getElementById("searchBar").style.display = "block";
    document.getElementById("searchButton").style.display = "none";

    document.getElementById("sortBar").style.display = "none";
    document.getElementById("sortButton").style.display = "block";
}

function showSort() {
    document.getElementById("sortBar").style.display = "block";
    document.getElementById("sortButton").style.display = "none";

    document.getElementById("searchBar").style.display = "none";
    document.getElementById("searchButton").style.display = "block";


}

function showFilter() {
    document.getElementById("filterBar").style.display = "block";
    document.getElementById("filterButton").style.display = "none";
}

function getFilter() {
    filterVal = document.getElementById("filter").value;
    document.getElementById(filterVal).style.display = "block";

}


function getColData(){
    colval = document.getElementById("columnAdd").value
    console.log(colval);
}


function getRowED(){
    $.ajax({
        url: `/getRow`,
        type: "GET",
        cache: false,
        data: {
            "parentId": parentED.value
            
        },
        success: function(response) {
    
            //if success
            

            $out=response['outputDiv']
            
            
            document.getElementById("rowED").innerHTML= $out
            console.log($out);
            
        },
        error: function(error) {
    
            //...
    
        }
    });
    }

function getRow(){
    $.ajax({
        url: `/getRow`,
        type: "GET",
        cache: false,
        data: {
            "parentId": parentAdd.value
            
        },
        success: function(response) {
    
            //if success
            

            $out=response['outputDiv']
            
            
            document.getElementById("rowAdd").innerHTML= $out
            console.log($out);
            
        },
        error: function(error) {
    
            //...
    
        }
    });
    }




// untuk filter parent node berdasarkan column pada Add =================================================
function filterParentonCol(){
    var collAdd = document.getElementById("columnAdd")
//console.log(collAdd);
collAdd.addEventListener("change",
    ()=>{ console.log(collAdd.value); 
        $.ajax({
            url: `/getParent`,
            type: "GET",
            cache: false,
            data: {
                "value": collAdd.value
                
            },
            success: function(response) {
        
                //if success
                $anodeall=response['anodeall'];
                console.log($anodeall);

                $out=response['outputDiv']
                
                
                document.getElementById("parentAdd").innerHTML= $out
                
            },
            error: function(error) {
        
                //...
        
            }
        });
    }
  )
}

filterParentonCol();
//=================================================================================



// untuk filter parent node berdasarkan column pada Edit =================================================

var colEd = document.getElementById("columnED")
//console.log(collAdd);
colEd.addEventListener("change",
    ()=>{ console.log(colEd.value); 
        $.ajax({
            url: `/getParentED`,
            type: "GET",
            cache: false,
            data: {
                "value": colEd.value
                
            },
            success: function(response) {
        
                //if success
                $anodeall=response['anodeall'];
                console.log($anodeall);

                $out=response['outputDiv']
                
                
                document.getElementById("parentED").innerHTML= $out
                
                
        
            },
            error: function(error) {
        
                //...
        
            }
        });
    }
  )
//=================================================================================


//untuk set arow_id 
//==Edit==
var parentED = document.getElementById("parentED")
//console.log(collAdd);
parentED.addEventListener("change",
    ()=>{ console.log(parentED.value); 
        getRowED();
    }
  )

//===Add===
var parentAdd = document.getElementById("parentAdd")
//console.log(collAdd);
parentAdd.addEventListener("change",
    ()=>{ console.log(parentAdd.value); 
        getRow();
    }
  )
//=================================================================================
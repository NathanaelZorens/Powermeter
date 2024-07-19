line=`<x-block-line-v></x-block-line-v>`;
downL=``;

function showSide(name,color) {
    document.getElementById("sideBar").style.display = "block";
    //document.getElementById("sideBar").style.position = "fixed";


    var newName = name;
    document.getElementById('rectName').innerHTML = "Nama: " + newName;
    document.getElementById('sideBarI').style.borderColor= color;

    $nodeName=name;
    //$nodeColor=color;
    console.log($nodeName+" is loaded");

$.ajax({
    url: `/getDeleteData`,
    type: "GET",
    cache: false,
    data: {
        "name":$nodeName
    },
    success: function(response) {

        //if success
        $nodeId=response['nodeId'];
        console.log($nodeId);
        document.getElementById("deleteBtn").action= "/anodes/" + $nodeId
    },
    error: function(error) {

        //...

    }
});

console.log($nodeName+" is loaded for Add");   
$.ajax({
    url: `/getAddChildData`,
    type: "GET",
    cache: false,
    data: {
        "name":$nodeName
    },
    success: function(response) {

        //if success
        $nodeId=response['nodeId'];
        $nodeCol=response['nodeCol'];

        console.log($nodeId);
        console.log($nodeCol);


        $outDivPr=response['outDivPr'];
        $outDivCol=response['outDivCol'];
        $outDivRow=response['outDivRow'];


        
        document.getElementById("columnAdd").innerHTML=$outDivCol;
        //document.getElementById("columnAdd").value=$nodeCol;

        document.getElementById("parentAdd").innerHTML=$outDivPr;
        //document.getElementById("parentAdd").value=$nodeId;

        
        // console.log(document.getElementById("parentAdd").value);

        document.getElementById("rowAdd").innerHTML=$outDivRow;
    
        //console.log($outDivRow);



        

    },
    error: function(error) {

        //...

    }
});


console.log($nodeName+" is loaded for Edit");   
$.ajax({
    url: `/getEditData`,
    type: "GET",
    cache: false,
    data: {
        "name":$nodeName
    },
    success: function(response) {

        //if success


        $nodeId=response['nodeId'];
        $nodeCol=response['nodeCol'];
        $nodeClr=response['nodeClr'];


        document.getElementById("editForm").action="/anodes/" + $nodeId;

        console.log($nodeId);
        console.log($nodeCol);


        $outDivPr=response['outDivPr'];
        $outDivCol=response['outDivCol'];
        $outDivRow=response['outDivRow'];


        document.getElementById("nameED").value=$nodeName;
        document.getElementById("colorED").value=$nodeClr;

        
        document.getElementById("columnED").innerHTML=$outDivCol;
        //document.getElementById("columnAdd").value=$nodeCol;

        document.getElementById("parentED").innerHTML=$outDivPr;
        //document.getElementById("parentAdd").value=$nodeId;

        
        // console.log(document.getElementById("parentAdd").value);

        document.getElementById("rowED").innerHTML=$outDivRow;
    
        //console.log($outDivRow);



        

    },
    error: function(error) {

        //...

    }
});


}

function hideSide() {
    document.getElementById("sideBar").style.display = "none";
}

function showSideED() {
document.getElementById("sideBarED").style.display = "block";
}

function hideSideED() {
    document.getElementById("sideBarED").style.display = "none";
}

function showSideAdd() {
    document.getElementById("sideBarAdd").style.display = "block";
    
    
    
}

function hideSideAdd() {
    document.getElementById("sideBarAdd").style.display = "none";
}

function funcOne() {
    alert('hi');
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

function getRowED() {
    $.ajax({
        url: `/getRow`,
        type: "GET",
        cache: false,
        data: {
            "parentId": parentED.value

        },
        success: function (response) {

            //if success


            $out = response['outputDiv']


            document.getElementById("rowED").innerHTML = $out
            console.log($out);

        },
        error: function (error) {

            //...

        }
    });
}


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
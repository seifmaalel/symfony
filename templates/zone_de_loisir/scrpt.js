let mymap


window.onload=() =>{
    mymap=L.map("detailmap").setView([48.852969,2.349903],11)
    L.titleLayer("https://maps.wikipidia.org/osm-intl/{z}/{x}/{y}png",{attribution:"carte fournir par wikipidia",minZoom:1,maxZoom:20 })
}
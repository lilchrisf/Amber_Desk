


for(let draggable of document.querySelectorAll('.dragElement') )
{
    let ren = Math.floor((Math.random() +1)*1000);
    draggable.setAttribute('id',ren.toString())
    draggable.addEventListener('dragstart',e=>{
        e.dataTransfer.setData('text/plain',draggable.id)
    });
}




for (let dropZone of document.querySelectorAll('#dropZone'))
{
    // WHEN DRAGGABLE ELEMENT IS OVER DROP ZONE
    dropZone.addEventListener("dragover",e=>{
        e.preventDefault();
        console.log('decode');
    });

    // WHEN DRAGGABLE ELEMENT IS OUT OF DROP ZONE
    dropZone.addEventListener('drop',e=>{
        e.preventDefault();
        let droppedElementId = e.dataTransfer.getData('text/plain');
        let droppedElement = document.getElementById(droppedElementId);

        dropZone.querySelector('#place').appendChild(droppedElement);
    });
}

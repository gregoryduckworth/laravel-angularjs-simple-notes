angular
    .module('Proof')
    .service('searchArray', searchArray);

function searchArray(){

    var service={
        search:search
    }

    return service;

    function search(array, id){
        for (var i=0; i < array.length; i++) {
                if (array[i].id === id) {
                    return array[i];
                }
            }
    }
}

angular
    .module('Proof')
    .factory('typesService', typesService);

function typesService($http) {
    var service =  {
        getAll: getAll,
        save:save
    }

    return service;

    function getAll(){
        return $http.get('/api/v1/types').then(getSuccess);
    }

    function getSuccess(response){
        return response.data;
    }

     function save(note){
        $http.post('/api/v1/types', note).then(saveSuccess);
    }

    function saveSuccess(response){
        console.log(response.data);
    }

}

angular
    .module('Proof')
    .factory('notesService', notesService);

function notesService($http) {
    var service =  {
        getAll: getAll,
        save:save
    }

    return service;

    function getAll(){
        return $http.get('/api/v1/notes').then(getSuccess);
    }
    function getSuccess(response){
        return response.data;
    }

    function save(note){
        $http.post('/api/v1/notes', note).then(saveSuccess);
    }

    function saveSuccess(response){
        console.log(response.data);
    }


}

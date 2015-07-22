angular
    .module('Proof')
    .controller('Notes', Notes);

Notes.$inject = ['notesService','notes','types', 'typesService', 'searchArray'];
function Notes(notesService, notes, types, typesService, searchArray) {
    var vm = this;
    vm.notes = [];
    vm.types = [];
    vm.new = {};
    vm.typeNew = {};
    vm.typeSelected = {};
    vm.save = save;
    vm.changeTypeNew = changeTypeNew;
    vm.saveType = saveType;

    activate();

    function activate() {
        vm.notes=notes;
        vm.types=types;
    }

    function save(){
        notesService.save(vm.new);
        vm.new = {};
        notesService.getAll().then(function(data){
            vm.notes = data;
        });
    }

    function changeTypeNew(){
        // This could lead to the service
        vm.typeSelected = searchArray.change(vm.types,vm.new.type)
    }

    function saveType(){
        typesService.save(vm.typeNew);
        vm.typeNew = {};
        typesService.getAll().then(function(data){
            vm.types = data;
        });
    }

 }



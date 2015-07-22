angular
    .module('Proof')
    .config(config);

function config($stateProvider, $urlRouterProvider) {
    $urlRouterProvider.otherwise("/notes");

    $stateProvider
    .state('notes', {
      url: "/notes",
      templateUrl: "app/notes/notes.html",
      controller: 'Notes',
      controllerAs: 'notes',
       resolve: {
                // notesService : 'notesService',
                // Bring me the notes from here directly.
                notes: function(notesService){
                    return notesService.getAll();
                },
                types: function(typesService){
                    return typesService.getAll();
                }
            }

    });
}

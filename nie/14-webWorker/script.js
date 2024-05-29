let worker;

window.addEventListener('DOMContentLoaded', () => {
    document.querySelector('#start').addEventListener('click', function() {
        if(typeof(Worker) !== "undefined") {
            // WebWorker jest obsługiwany.
            if(typeof(worker) == "undefined") {
                worker = new Worker('./worker.js');
                worker.onmessage = function(event) {
                    document.querySelector('#counter').innerHTML = event.data;
                };
            }
        }
        else {
            // Brak obsługi WebWorker.
            console.log('Brak obsługi WebWorker.');
        }
    });
    document.querySelector('#stop').addEventListener('click', function() {
        worker.terminate();
        worker = undefined;
    });
});
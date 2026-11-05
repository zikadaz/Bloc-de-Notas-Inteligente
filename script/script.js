

/* Non editable file, generated automatically by Typescript Compiler - Tsc*/

class Listener {
    textareaContent = [];
    textareaId;
    constructor(textarea /** must be the id of textarea */) {
        this.textareaId = textarea;
    }
    /* private method */
    /* parse the text deleting the whitespaces between them */
    /* push them to a list */
    #getTextParsed() {
        /* looks for an element with matching ids */
        /*  checks if the textarea is a valid element */
        const textarea = document.getElementById(this.textareaId);
        /** checks if the textarea != false */
        if (textarea) {
            const rawtext = textarea.value.trim().split(/\s+/).filter(Boolean);
            if (rawtext.length === 0) {
                alert("No words or letters were found.");
            }
            /* counts the number of elements in rawtext */
            let counter = 0;
            let letter_counter = 0;
            for (const element of rawtext) {
                counter++;
                for (const word of element) {
                    letter_counter++;
                }
            }
            alert(`${counter} elements were found. ${letter_counter} letter found.`);
        }
    }
    parser() {
        this.#getTextParsed();
    }
}
/* creates a  new instance of listener */
const listener = new Listener("contenido");
/* gets the button by id*/
const button = document.getElementById("submit-content");
/* hooks the parser() function directly into an event */
button?.addEventListener("click", () => listener.parser());

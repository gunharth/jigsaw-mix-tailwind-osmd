import { OSMD } from 'opensheetmusicdisplay';

let scores = document.getElementsByClassName('language-score');

for(let i = 0; i < scores.length; i++) {

    let score = scores[i];
    let file = score.innerText;
    score.innerText = '';
    score.width = 500;

    let osmd = new OSMD(score, true);


    osmd.load(file)
        .then(
            () => osmd.render(),
            (err) => console.log(err)
        );
}
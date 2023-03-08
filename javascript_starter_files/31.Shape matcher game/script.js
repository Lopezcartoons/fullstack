let currentScore = 0;
let playing = false;
let shape1;
let shape2;
const matchBtn = document.getElementById('match');

const shapes = [
    {color: '#FF595E', width: 250, height: 160 },
    {color: '#c0392b', width: 270, height: 150 },
    {color: '#FFFFFF', width: 320, height: 170 },
    {color: '#76d7c4', width: 310, height: 180 },
    {color: '#8AC926', width: 190, height: 160 },
    {color: '#8e44ad', width: 200, height: 170 },
    {color: '#212f3d', width: 380, height: 180 },
    {color: '#2874a6', width: 400, height: 120 },
    {color: '#5d6d7e', width: 370, height: 140 },
    {color: '#f9e79f', width: 440, height: 190 },
]

const selectRandomShape = () => {
    const randomNum = Math.floor(Math.random()*shapes.length);
    const randomSelection = shapes[randomNum];
    console.log(randomSelection)
    return randomSelection;
}

const repeatRandomShape = () => {
    setInterval(() => {
        matchBtn.disabled = false;
        shape1 = selectRandomShape();
        shape2 = selectRandomShape();
       
        const shape1Styles = `width:${shape1.width+'px'};
                              background:${shape1.color};
                              height:${shape1.height+'px'};`


        const shape2Styles = `width:${shape2.width+'px'};
                              background:${shape2.color};
                              height:${shape2.height+'px'};`

        document.getElementById('shape1').style.cssText = shape1Styles;              

        document.getElementById('shape2').style.cssText = shape2Styles;


    }, 850); 
}

// Start game
document.getElementById('play').onclick = () => {
    playing = true;
    // Disable play button 
    document.getElementById('play').disabled = true;
    repeatRandomShape();
}

//Compare

document.getElementById('match').onclick = () => {
if (playing){
    matchBtn.disabled = true;
    if(Object.is(shape1, shape2)){
        currentScore++;
        document.getElementById('score').innerHTML = currentScore;
    } else {
        currentScore--;
        document.getElementById('score').innerHTML = currentScore;
    }
}
}


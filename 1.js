function pascalTriangle(lines){
    let pattern = [];
    for(let row=0;row <= lines; row++){
        let value = 1;
        for(let col = 0;col <= row;col++){
            document.write(`${value}  `);
            value = value * (row-col)/(col+1);
        }
        document.write('<br>')
    }
}
pascalTriangle(4);

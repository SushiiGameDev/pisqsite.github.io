let clms = document.querySelectorAll(".rxt");
const lngt = clms.length;
let rsm = true;
console.log(clms[1]);
let columns = [document.getElementById("frstclm"), document.getElementById("scnclm"), document.getElementById("trdclm")];
window.addEventListener("resize", function() {
    if((this.innerWidth < 1024 && this.innerWidth < this.innerHeight) && rsm == true) {
        let i = 0;
        for(let a = 0; a < lngt; a++) {
            rsm = false;
            columns[i].appendChild(clms[a]);
            if(i == 2) {
                i = 0;
                continue;
            }
            i++;
        }
    }
    else if((this.innerWidth >= 1024) && rsm == false) {
        for(let i = 0; i < clms.length; i++) {
            this.document.getElementById("lstclm").appendChild(clms[i]);
            rsm = true;
        }
    }
});
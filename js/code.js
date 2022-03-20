let clms = document.querySelectorAll(".rxt");
let scnClms = document.querySelectorAll(".scnClms");
const lngt = clms.length;
const scnLngt = scnClms.length;
let rsm = true;
let columns = [document.getElementById("frstclm"), document.getElementById("scnclm"), document.getElementById("trdclm")];
window.addEventListener("load", function() {
    if(this.innerWidth < 1024 && this.innerWidth < this.innerHeight) {
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
});
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
    if((this.innerWidth >= 1024) && rsm == false) {
        for(let i = 0; i < clms.length; i++) {
            this.document.getElementById("lstclm").appendChild(clms[i]);
            rsm = true;
        }
    }
    if((this.innerWidth < 767 && this.innerWidth < this.innerHeight)) {
        let j = 0;
        for(let a = 0; a < scnLngt; a++) {
            rsm = false;
            columns[j].appendChild(scnClms[a]);
            if(j == 1) {
                j = 0;
                continue;
            }
            j++;
        }
    }
});
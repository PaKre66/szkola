
  class ShapeDetector {
    constructor(iloscBokow) {
        this.iloscBokow = iloscBokow;
        this.nazwyFigur = ["Koło", "Półkole", "Trójkąt", "Czworokąt"];
    }
    nazwaFigury() {
        return this.nazwyFigur[this.iloscBokow - 1];
    }
    obliczObwod(...dlugosci) {
        if(this.iloscBokow == dlugosci.length){
            switch(this.iloscBokow) {
                case 1:
                    return 2*Math.PI*dlugosci[0];
                case 2:
                    return dlugosci[0]*(match.PI+2);
                case 3:
                    return dlugosci[0]+dlugosci[1]+dlugosci[2];
                case 4:
                    return dlugosci[0]+dlugosci[1]+dlugosci[2]+dlugosci[3];
            }
        }
        
    }
}
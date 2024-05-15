function calculate(){

  // 1. init & validate
  const aNum = input.get('fraction_a_num').natural().raw();
  const aDenom = input.get('fraction_a_denom').natural().raw();
  let bNum = input.get('fraction_b_num').optional().natural().raw();
  let bDenom = input.get('fraction_b_denom').optional().natural().raw();
  let isEqual;
  input.silent = false;
  if(!input.valid()) return;

  // 2. calculate
  if(bNum && !bDenom){
    bDenom = aDenom * bNum / aNum;
  }
  else if(!bNum && bDenom){
    bNum = aNum * bDenom / aDenom;
  }
  else if(bNum && bDenom){
    isEqual = (aNum / aDenom == bNum / bDenom);
  }
  else if(!bNum && !bDenom){
    const gcf = math.gcd(aNum, aDenom);
    if(gcf != 1){
      bNum = aNum / gcf;
      bDenom = aDenom / gcf;
    } else {
      bNum = aNum * 2;
      bDenom = aDenom * 2;
    }
  }

  // 3. output
  _('aNum').innerText = aNum;
  _('aDenom').innerText = aDenom;
  _('bNum').innerText = _('fraction_b_num').value = bNum;
  _('bDenom').innerText = _('fraction_b_denom').value = bDenom;
  _('result').classList[isEqual===undefined?'add':'remove']('hidden');
  _('result').innerHTML = `is <b>${isEqual}</b>`;

}
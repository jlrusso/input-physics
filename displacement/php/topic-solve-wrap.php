<?php

echo "
  <div class='col-md-8' id='topic-solve-wrap'>
    <div class='panel panel-default'>
      <div class='panel-heading'>
        <div class='panel-title'>
          <div class='solve-selection'>
            <form>
              <span><span class='badge'>1</span><b> Solve:&nbsp;</b></span>
              <label class='radio-btn'>
                <input type='radio' class='solve-btn' name='radio-one' id='solve-displacement'>
                  <span class='checkmark'>displacement</span> |
              </label>
              <label class='radio-btn'>
                  <input type='radio' class='solve-btn' name='radio-one' id='solve-final-p'>
                  <span class='checkmark'>final position</span> |
              </label>
              <label class='radio-btn'>
                  <input type='radio' class='solve-btn' name='radio-one' id='solve-initial-p'>
                  <span class='checkmark'>initial position</span>
              </label>
            </form>
          </div>
          <div class='unit-selection'>
            <form>
              <span class='badge'>2</span>
              <span><b>Unit:&nbsp;</b></span>
              <label class='radio-btn'>
                <input type='radio' class='units' name='radio-two' units='m' id='meter-btn'/>
                  <span class='checkmark'>meters</span> |
              </label>
              <label class='radio-btn'>
                  <input type='radio' class='units' name='radio-two' units='mi' id='mile-btn'/>
                  <span class='checkmark'>miles</span> |
              </label>
              <label class='radio-btn'>
                  <input type='radio' class='units' name='radio-two' units='ft' id='feet-btn'/>
                  <span class='checkmark'>feet</span> |
              </label>
              <label class='radio-btn'>
                  <input type='radio' class='units' name='radio-two' units='km' id='kilometer-btn'/>
                  <span class='checkmark'>kilometers</span>
              </label>
            </form>
          </div>
        </div>
      </div>
      <div class='panel-body' id='main-panel'>
        <div class='row'>
          <div class='col-md-4'>
            <h4 class='text-center'><span class='badge'>3</span>&nbsp;<strong>Values</strong></h4>
            <form class='form-group'>
              <input class='form-control num-input-field' type='number' id='displacement-field' placeholder='displacement (&Delta;x)'>
              <input class='form-control num-input-field' type='number' id='final-p-field' placeholder='final position (Xf)'>
              <input class='form-control num-input-field' type='number' id='initial-p-field' placeholder='initial position (Xi)'>
              <input class='form-control num-input-field' type='number' id='sig-figs-field' placeholder='# of sig-figs (optional)' min='1' max='9'>
              <div class='form-divider'></div>
              <div class='calc-and-clear'>
                <button type='button' id='calculate-btn'>Calculate</button>
                <button type='button' id='clear-btn'><b>Clear</b></button>
              </div>
            </form>
          </div>
          <div class='col-md-8 text-center'>
            <h4 id='equation-heading'><strong>Equation</strong></h4>
            <div id='slide-arrow-container'>
              <div class='slide-arrow-btn' id='prev-slide-btn'><span class='glyphicon glyphicon-chevron-left'></span></div>
              <div class='slide-arrow-btn' id='next-slide-btn'><span class='glyphicon glyphicon-chevron-right'></span></div>
            </div>
            <div id='outer-image-container'>
              <div id='inner-image-container'>
                <img src='../images/displacement/basic-displacement.PNG' class='img-responsive slide' alt='Displacement Equation'>
                <img src='../images/displacement/basic-final-position.PNG' class='img-responsive slide' alt='Final Position Equation'>
                <img src='../images/displacement/basic-initial-position.PNG' class='img-responsive slide' alt='Initial Position Equation'>
              </div>
              <div id='slide-bar-indicators'>
                <div class='slide-bar'></div>
                <div class='slide-bar'></div>
                <div class='slide-bar'></div>
              </div>
            </div>
            <div id='solo-image'>
              <img src='../images/displacement/newVelocityFrames.PNG' class='img-responsive' alt='Velocity Frames'/>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
";
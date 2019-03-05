<?php 

echo "
  <div class='modal fade example-modal' id='my-modal-two' role='dialog'>
    <div class='modal-dialog'>
      <div class='modal-content'>
        <div class='modal-header'>
          <h4 class='text-center'>Final Position</h4>
        </div>
        <div class='modal-body'>
          <button class='accordion first-accordion'><strong>Problem</strong></button>
          <div class='modal-panel'>
            <p>
            A golf ball is placed 145 meters south of a tree line and is then hit with enough force to travel 300 meters north. What will be the golf ball’s final position?
            </p>
          </div>
          <button class='accordion'><strong>Given Variables</strong></button>
          <div class='modal-panel'>
            <p>
              <ul>
                <li><b>Equation</b> = X<sub>f</sub> = &Delta;x + X<sub>i</sub></li>
                <li><b>Initial Position</b> = X<sub>i</sub> is 145 meters south of the treeline</li>
                <li><b>Distance Traveled</b> = 300 meters</li>
              </ul>
            </p>
          </div>
          <button class='accordion'><strong>Illustration</strong></button>
          <div class='modal-panel text-center'>
            <img src='../images/displacement/displacement-accordion-picture-two.PNG' alt='Displacement Illustration' class='img-responsive'>
          </div>
          <button class='accordion last-accordion'><strong>Solution</strong></button>
          <div class='modal-panel'>
            <p>
              <ol>
                <li><b>Equation</b> : X<sub>f</sub> = &Delta;x + X<sub>i</sub></li>
                <li><b>Initial Position</b> : 0 meters (distance from treeline does not matter)</li>
                <li><b>Displacement</b> : 300 meters (only vector of travel)</li>
                <li><b>Final Position</b> : 300 - 0 = 300 meters</li>
              </ol>
            </p>
          </div>
        </div>
        <div class='modal-footer text-center'>
          <button type='button' class='btn glyphicon glyphicon-remove close-ex-btn' data-dismiss='modal'></button>
        </div>
      </div>
    </div>
  </div>
";
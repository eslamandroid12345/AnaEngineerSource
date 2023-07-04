var controlVisible=!0;var controlTimer=null;var controlable=!1;var caption=!1;var popupTimeout=null;var temp_vol=0;var isFocus=!1;window.addEventListener('DOMContentLoaded',(event)=>{print('DOM Content Loaded');create_control();document.getElementsByClassName('video-player')[0].parentElement.style.height=document.getElementsByClassName('video-player')[0].offsetHeight+5+'px';toggle_caption();resize_loading_spinner();document.getElementsByTagName('video')[0].oncontextmenu=function(e){e.preventDefault()}
document.getElementsByTagName('video')[0].oncanplay=function(){controlable=!0;document.getElementsByClassName('loadingspinner')[0].style.display='none';document.getElementsByClassName('video-player')[0].parentElement.style.height=document.getElementsByClassName('video-player')[0].offsetHeight+5+'px'}
document.getElementsByTagName('video')[0].onwaiting=function(){controlable=!1;document.getElementsByClassName('loadingspinner')[0].style.display='block'}
document.getElementById('volume-range').addEventListener('input',function(){if(document.getElementsByTagName('video')[0].muted==!0){toggle_mute()}
if(document.getElementById('volume-range').value==1){toggle_mute();update_volume(0)}else{update_volume(document.getElementById('volume-range').value)}},!1);document.getElementById('play-pause').onclick=function(){togglePlayPause()}
document.getElementsByTagName('video')[0].ontimeupdate=function(){update_video_time()}
document.getElementById('mute-button').onclick=function(){toggle_mute()}
document.getElementById('fullscreen-button').onclick=function(){toggleFullScreen()}
document.getElementsByClassName('video-player')[0].parentElement.onclick=function(){if(is_touch_enabled()){if(controlTimer){window.clearTimeout(controlTimer)}
if(!controlVisible){$('#player-control_id > :not(#spinner-container_id)').css('opacity',1);$('#player-control_id').css('background','rgb(0, 0, 0, 0.7)');controlVisible=!0}
controlTimer=window.setTimeout(disappearControl,2000)}}
document.onmousemove=function(){if(!is_touch_enabled()){if(controlTimer){window.clearTimeout(controlTimer)}
if(!controlVisible){if($(".video-player:hover").length!=0){$('#player-control_id > :not(#spinner-container_id)').css('opacity',1);$('#player-control_id').css('background','rgb(0, 0, 0, 0.7)');controlVisible=!0}}
if($(".player-control:hover").length!=0){}else{controlTimer=window.setTimeout(disappearControl,2000)}}}
document.getElementsByTagName('video')[0].onclick=function(){if(!is_touch_enabled()){togglePlayPause()}}
document.getElementById('forward-button').onclick=function(){update_video_time();document.getElementsByTagName('video')[0].currentTime+=10;toggle_popup('fa-forward')}
document.getElementById('backward-button').onclick=function(){update_video_time();document.getElementsByTagName('video')[0].currentTime-=10;toggle_popup('fa-backward')}
window.onkeydown=function(event){if(isFocus){if(event.keyCode===32){event.preventDefault();togglePlayPause()}
if(event.keyCode===38){event.preventDefault();toggle_popup('fa-volume');var number=parseInt(document.getElementById('volume-range').value)+1;if(number<=100){if(document.getElementsByTagName('video')[0].muted){document.getElementsByTagName('video')[0].muted=!1;document.getElementById('mute-button').className='unmute'}
update_volume(number/1);document.getElementById('volume-range').value=number.toString()}}
if(event.keyCode===40){event.preventDefault();var number=parseInt(document.getElementById('volume-range').value)-1;if(number>1){toggle_popup('fa-volume-down');update_volume(number/1);document.getElementById('volume-range').value=number.toString()}else{toggle_popup('fa-volume-mute');temp_vol=document.getElementsByTagName('video')[0].volume;document.getElementsByTagName('video')[0].muted=!0;update_volume(0);document.getElementById('volume-range').value=0;document.getElementById('mute-button').className='mute'}}
if(event.keyCode===39){event.preventDefault();update_video_time();document.getElementsByTagName('video')[0].currentTime+=10;toggle_popup('fa-forward')}
if(event.keyCode===37){event.preventDefault();update_video_time();document.getElementsByTagName('video')[0].currentTime-=10;toggle_popup('fa-backward')}}};window.onresize=function(){resize_loading_spinner();document.getElementsByClassName('video-player')[0].parentElement.style.height=document.getElementsByClassName('video-player')[0].offsetHeight+5+'px'}
window.onclick=function(e){if(document.getElementById('player-control_id').contains(e.target)||document.getElementsByClassName('video-player')[0].contains(e.target)){isFocus=!0}else{isFocus=!1}}
document.querySelector(".player-control-bar").onmousemove=function(e){var vid=document.getElementsByClassName('video-player')[0];var offset=$(this).offset();var left=(e.pageX-offset.left);var totalWidth=document.querySelector(".player-control-bar").offsetWidth;var percentage=(left/totalWidth);var vidTime=vid.duration*percentage;var ha=Math.floor(vidTime/3600);var ma=Math.floor(vidTime%3600/60);var sa=Math.floor(vidTime%3600%60);if(ha<10){ha="0"+ha}
if(ma<10){ma="0"+ma}
if(sa<10){sa="0"+sa}
document.getElementById("timeup").innerHTML=ha+":"+ma+":"+sa;$('#timeup').css('left',left-20+'px');percentage=percentage*100;document.querySelector("#gray_bar").style.width=percentage+"%"};document.querySelector(".player-control-bar").onclick=function(e){var play_pause_button=document.getElementById('play-pause');var vid=document.getElementsByClassName('video-player')[0];var offset=$(this).offset();var left=(e.pageX-offset.left);var totalWidth=document.querySelector(".player-control-bar").offsetWidth;var percentage=(left/totalWidth);var vidTime=vid.duration*percentage;vid.currentTime=vidTime;update_video_time();if(vid.paused){play_pause_button.className='pause';vid.play()}};(function(){document.getElementsByClassName('video-player')[0].parentElement.onmousemove=function(){if(controlTimer){window.clearTimeout(controlTimer)}
if(!controlVisible){$('#player-control_id > :not(#spinner-container_id)').css('opacity',1);$('#player-control_id').css('background','rgb(0, 0, 0, 0.7)');controlVisible=!0}
if(!is_touch_enabled()){if($(".player-control:hover").length!=0){}else{controlTimer=window.setTimeout(disappearControl,2000)}}};if($(".player-control:hover").length!=0){window.clearTimeout(controlTimer)}})()});function create_control(){const div=document.createElement('div');div.className='player-control';div.id='player-control_id';div.innerHTML=`
        
            <div id="spinner-container_id" class="spinner-container">
                <div class="loadingspinner"></div>
                <div style="opacity:0;transform:scale(1);" class="play-popup"><i class="fal fa-pause"></i></div>
            </div>
            <div class="player-control-bar">
              <div id="timeup">00:00</div>
              <span></span>
              <div id="gray_bar"></div>
            </div>
            <div class="player-control-buttons">
                <button id="play-pause"></button>
                <div class="volume-control">
                  <button id="mute-button"></button>
                  <div class="volume-bar">
                    <input type="range" min="1" max="100" value="100" class="volume-slider" id="volume-range">
                  </div>
                </div>
                <div class="video-time">
                    <span id="curtimetext">00:00:00</span> / <span id="durtimetext">00:00:00</span>
                </div>
                <div class="left-button">
                    <button id="backward-button"></button>
                    <button id="forward-button"></button>
                    <button id="fullscreen-button"></button>
                </div>
            </div>
        
      `;document.getElementsByClassName('video-player')[0].parentElement.appendChild(div);print('video controler was created')}
function video_debug(string){var events=new Array("abort","canplay","canplaythrough","durationchange","emptied","ended","error","loadeddata","loadedmetadata","loadstart","pause","play","ratechange","seeked","seeking","stalled","timeupdate","volumechange","waiting");var vid=document.getElementsByClassName(string)[0];for(var i in events){vid.addEventListener(events[i],showEvent,!1)}}
function showEvent(e){var vid=document.getElementsByClassName('video-player')[0];var addMsg="";if(e.type=="durationchange"){addMsg=e.type+"["+vid.duration+"]"}else if(e.type=="seeked"){addMsg=e.type+"["+vid.currentTime+"]"}else if(e.type=="timeupdate"){}else if(e.type=="volumechange"){addMsg="volume "+(vid.muted?"muted":vid.volume)}else{addMsg=e.type}
if(addMsg!=""){print(addMsg)}}
function togglePlayPause(){if(controlable){var play_pause_button=document.getElementById('play-pause');var video=document.getElementsByTagName('video')[0];if(video.paused){toggle_popup('fa-play');play_pause_button.className='pause';video.play()}else{toggle_popup('fa-pause');play_pause_button.className="play";video.pause()}}}
function update_video_time(){var curtimetext=document.getElementById("curtimetext");var durtimetext=document.getElementById("durtimetext");var vid=document.getElementsByTagName('video')[0];var percentage=(vid.currentTime/vid.duration)*100;document.querySelector(".player-control-bar > span").style.width=percentage+"%";var h=Math.floor(vid.currentTime/3600);var m=Math.floor(vid.currentTime%3600/60);var s=Math.floor(vid.currentTime%3600%60);var hz=Math.floor(vid.duration/3600);var mz=Math.floor(vid.duration%3600/60);var sz=Math.floor(vid.duration%3600%60);if(h<10){h="0"+h}
if(m<10){m="0"+m}
if(s<10){s="0"+s}
if(hz<10){hz="0"+hz}
if(mz<10){mz="0"+mz}
if(sz<10){sz="0"+sz}
curtimetext.innerHTML=h+":"+m+":"+s;durtimetext.innerHTML=hz+":"+mz+":"+sz};function toggle_mute(){var vid=document.getElementsByTagName('video')[0];mute_button=document.getElementById('mute-button');if(vid.muted){toggle_popup('fa-volume');vid.muted=!1;update_volume(temp_vol*100);document.getElementById('volume-range').value=temp_vol*100;mute_button.className='unmute'}else{toggle_popup('fa-volume-mute');temp_vol=vid.volume;vid.muted=!0;update_volume(0);document.getElementById('volume-range').value=0;mute_button.className='mute'}}
function toggleFullScreen(){var fullscreen_button=document.getElementById('fullscreen-button');var video_container=document.getElementsByClassName('video-player')[0].parentElement;var video=document.getElementsByTagName('video')[0];if(document.fullscreenElement){document.exitFullscreen();video.removeAttribute("style");screen.orientation.unlock()}else if(document.webkitFullscreenElement){video.style.height="inherit";document.webkitExitFullscreen()}else if(video_container.webkitRequestFullscreen){video.style.height="inherit";video_container.webkitRequestFullscreen()}else{video.style.height="inherit";video_container.requestFullscreen()}
if('onorientationchange' in window){screen.orientation.lock("landscape-primary")}
toggle_popup('fa-expand')}
function toggle_caption(){var video=document.getElementsByTagName('video')[0];if(video.textTracks.length!=0){if(!caption){video.textTracks[0].mode="showing";caption=!0}else{video.textTracks[0].mode="hidden";caption=!1}}}
function resize_loading_spinner(){var spinner_container=document.getElementsByClassName('spinner-container')[0];var video=document.getElementsByTagName('video')[0];if(document.fullscreenElement){spinner_container.style.top=screen.height/2*-1+34+'px'}
spinner_container.style.top=video.offsetHeight/2*-1+'px';spinner_container.style.left=video.offsetWidth/2-23+'px'}
function toggle_popup(string){if(popupTimeout){window.clearTimeout(popupTimeout)}
$('div.play-popup > i').removeClass();$('div.play-popup > i').toggleClass('fal '+string);document.getElementsByClassName('play-popup')[0].style.opacity='1';document.getElementsByClassName('play-popup')[0].style.transform='scale(1.1)';popupTimeout=window.setTimeout(function(){document.getElementsByClassName('play-popup')[0].style.opacity='0';document.getElementsByClassName('play-popup')[0].style.transform='scale(1)';popupTimeout=null},300)}
function update_volume(n){var video=document.getElementsByTagName('video')[0];video.volume=n/100}
function print(string){console.log('Video_Player_Log: '+string)}
function is_touch_enabled(){return('ontouchstart' in window)||(navigator.maxTouchPoints>0)||(navigator.msMaxTouchPoints>0)}
function disappearControl(){controlTimer=null;$('#player-control_id > :not(#spinner-container_id)').css('opacity',0);$('#player-control_id').css('background','unset');controlVisible=!1}
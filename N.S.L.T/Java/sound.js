
   
    // الحصول على عنصر الصوت والفيديو
    var audio = document.getElementById('background-audio');
        var video = document.getElementById('video');

        // متغير لتتبع ما إذا كان الصوت قد تم تشغيله بالفعل
        var isAudioPlayed = false;

        // الاستماع إلى حدث التمرير
        window.addEventListener('scroll', function() {
            // إذا لم يتم تشغيل الصوت بعد
            if (!isAudioPlayed) {
                // تشغيل الصوت
                audio.play();
                isAudioPlayed = true; // تم تشغيل الصوت
            }
        });

        // الاستماع إلى تشغيل الفيديو
        video.addEventListener('play', function() {
            // إيقاف الصوت عند تشغيل الفيديو
            audio.pause();
        });

        // الاستماع إلى إيقاف الفيديو
        video.addEventListener('pause', function() {
            // استئناف الصوت عند إيقاف الفيديو
            if (isAudioPlayed) {
                audio.play();
            }
        });
   
var news = [
    "Minister hints at reopening schools, colleges after Eid", "Covid-19 Canada says AstraZeneca vaccine safe, but adds blood clot warning", "SARS COV-2: Researchers find 34 unique mutations in Bangladesh ",
  ];
  
  for (i = 0; i < news.length; i++) {
    $("#newsTicker p").append(
      "<span class='date'>24/3/2020:</span>" +
      "<span class='story'>" + news[i] + "</span>"
    );
  
  
  }
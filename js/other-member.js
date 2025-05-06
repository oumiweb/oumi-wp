// other-member.js

document.addEventListener('DOMContentLoaded', () => {
  const staffMembers = [
    {
      img: "/img/staff/staff01.jpg",
      alt: "男性社員西村優の写真",
      position: "コンサルタント",
      year: "2011年入社",
      name: "西村 優",
      slug: "nishimura",
      message1: "「あなたが担当で良かった」",
      message2: "この一言が、最高のやりがい"
    },
    {
      img: "/img/staff/staff02.jpg",
      alt: "男性社員橋本拓哉の写真",
      position: "コンサルタント",
      year: "2015年入社",
      name: "橋本 拓哉",
      slug: "hashimoto",
      message1: "全力で考えぬける環境",
      message2: "試練の数だけ強くなれました"
    },
    {
      img: "/img/staff/staff03.jpg",
      alt: "女性社員青木美月の写真",
      position: "ソリューション営業",
      year: "2017年入社",
      name: "青木 美月",
      slug: "aoki",
      message1: "お客様も知らない課題を",
      message2: "一緒に探し出す醍醐味"
    },
    {
      img: "/img/staff/staff04.jpg",
      alt: "男性社員佐々木健の写真",
      position: "データサイエンティスト",
      year: "2002年入社",
      name: "佐々木 健",
      slug: "sasaki",
      message1: "ビジネスの課題を",
      message2: "データで解決する醍醐味"
    },
    {
      img: "/img/staff/staff05.jpg",
      alt: "女性社員高田凛の写真",
      position: "コンサルタント",
      year: "2006年入社",
      name: "高田 凛",
      slug: "takada",
      message1: "どんな難解な案件も",
      message2: "チームで突破できる強い連携"
    },
    {
      img: "/img/staff/staff06.jpg",
      alt: "男性社員橘光の写真",
      position: "システム事業部課長",
      year: "2007年入社",
      name: "橘 光",
      slug: "tachibana",
      message1: "お客様と一緒に開発",
      message2: "豊富なプライム案件が魅力です"
    }
  ];

  function getRandomMembers(allMembers, excludeName, count = 3) {
    const filtered = allMembers.filter(member => member.name !== excludeName);
    const shuffled = filtered.sort(() => 0.5 - Math.random());
    return shuffled.slice(0, count);
  }

  function createMemberCard(member) {
    return `
      <a href="/html/staff/${member.slug}.html" class="staff-card__link">
        <div class="staff-cards">
          <img src="${member.img}" alt="${member.alt}" class="staff-card__image">
          <div class="staff-card__message">
            <span>${member.message1}</span>
            <span>${member.message2}</span>
          </div>
          <div class="staff-card__info">
            <p class="staff-card__position">${member.position}&nbsp;&nbsp;${member.year}</p>
            <p class="staff-card__name">${member.name}</p>
          </div>
        </div>
      </a>
    `;
  }
  

  const container = document.getElementById('otherMemberList');

  // ★現在表示しているスタッフ名をHTMLのdata属性から取得
  const currentStaffName = document.querySelector('.staff-article').dataset.staffName;
  
  const randomMembers = getRandomMembers(staffMembers, currentStaffName);
  
  randomMembers.forEach(member => {
    container.insertAdjacentHTML('beforeend', createMemberCard(member));
  });  
});

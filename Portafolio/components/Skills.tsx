import React from "react";
import { View, Text } from "react-native";
import { skills } from "../data/portfolio";

const categoryStyles: Record<string, { bg: string; text: string; border: string; dot: string; bar: string }> = {
  Frontend: { bg: "bg-blue-50", text: "text-blue-700", border: "border-blue-200/60", dot: "bg-blue-400", bar: "bg-blue-400" },
  Mobile: { bg: "bg-violet-50", text: "text-violet-700", border: "border-violet-200/60", dot: "bg-violet-400", bar: "bg-violet-400" },
  Lenguaje: { bg: "bg-emerald-50", text: "text-emerald-700", border: "border-emerald-200/60", dot: "bg-emerald-400", bar: "bg-emerald-400" },
  Backend: { bg: "bg-amber-50", text: "text-amber-700", border: "border-amber-200/60", dot: "bg-amber-400", bar: "bg-amber-400" },
  "Base de datos": { bg: "bg-rose-50", text: "text-rose-700", border: "border-rose-200/60", dot: "bg-rose-400", bar: "bg-rose-400" },
  Herramientas: { bg: "bg-slate-100", text: "text-slate-700", border: "border-slate-200/60", dot: "bg-slate-400", bar: "bg-slate-400" },
  DevOps: { bg: "bg-cyan-50", text: "text-cyan-700", border: "border-cyan-200/60", dot: "bg-cyan-400", bar: "bg-cyan-400" },
};

const defaultStyle = { bg: "bg-gray-50", text: "text-gray-700", border: "border-gray-200", dot: "bg-gray-400", bar: "bg-gray-400" };

export default function Skills() {
  return (
    <View id="skills" className="py-28 bg-slate-50 px-6 relative overflow-hidden">
      <View className="absolute bottom-0 left-0 w-48 h-48 dots-pattern opacity-15" />
      <View className="absolute top-10 right-10 w-32 h-32 rounded-full bg-blue-50/30 glow-orb" />

      <View className="max-w-4xl mx-auto">
        <View className="items-center mb-16">
          <View className="bg-white rounded-full px-4 py-1.5 mb-4 border border-slate-200">
            <Text className="text-xs font-semibold text-slate-500 tracking-widest uppercase">
              Habilidades
            </Text>
          </View>
          <Text className="text-4xl md:text-5xl font-extrabold text-slate-900 text-center tracking-tight mb-3">
            Tecnologias que manejo
          </Text>
          <Text className="text-base text-slate-400 text-center max-w-md">
            Herramientas y lenguajes con los que trabajo dia a dia
          </Text>
        </View>

        <View className="flex-row flex-wrap gap-4 justify-center">
          {skills.map((skill) => {
            const style = categoryStyles[skill.category] || defaultStyle;
            return (
              <View
                key={skill.name}
                className={`skill-badge w-full md:w-[calc(50%-8px)] lg:w-[calc(33.333%-11px)] px-5 py-4 rounded-2xl border ${style.bg} ${style.border}`}
              >
                <View className="flex-row items-center justify-between mb-2">
                  <View className="flex-row items-center gap-2.5">
                    <View className={`w-2.5 h-2.5 rounded-full ${style.dot}`} />
                    <Text className={`font-bold text-sm ${style.text}`}>
                      {skill.name}
                    </Text>
                  </View>
                  <Text className="text-xs font-bold text-slate-400 font-mono">
                    {skill.level}%
                  </Text>
                </View>

                {/* Progress bar */}
                <View className="h-1.5 bg-white/60 rounded-full overflow-hidden">
                  <View
                    className={`progress-bar h-full rounded-full ${style.bar} opacity-60`}
                    style={{ width: `${skill.level}%` }}
                  />
                </View>

                <Text className="text-xs text-slate-400 mt-2 font-medium">
                  {skill.category}
                </Text>
              </View>
            );
          })}
        </View>
      </View>
    </View>
  );
}
